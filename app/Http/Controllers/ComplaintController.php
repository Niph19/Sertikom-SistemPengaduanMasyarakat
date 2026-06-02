<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use App\Models\Response;

class ComplaintController extends Controller
{
    public function form()
    {
        return view('complaints.create');
    }
    public function index(Request $request)
    {
        $user = Auth::user();
        $sortStatus = $request->get('sort_status', 'asc');
        $statusOrder = "FIELD(status, 'Pending', 'Diproses', 'Selesai', 'Ditolak')";

        if ($user->role === 'admin') {
            $pengaduan = Complaint::with('user')
                ->where('status', '!=', 'Selesai')
                ->orderByRaw($statusOrder . ' ' . ($sortStatus === 'desc' ? 'DESC' : 'ASC'))
                ->get();
            return view('complaints.admin-index', compact('pengaduan', 'sortStatus'));
        }

        $pengaduan = Complaint::with('user')
            ->where('user_id', $user->id)
            ->orderByRaw($statusOrder . ' ' . ($sortStatus === 'desc' ? 'DESC' : 'ASC'))
            ->get();

        return view('complaints.user-index', compact('pengaduan', 'sortStatus'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'judul_pengaduan' => 'required',
            'deskripsi_pengaduan' => 'required',
            'lokasi_pengaduan' => 'required',
            'foto_pengaduan' => 'required|image|mimes:jpg,jpeg,png',
        ]);

        // menyimpan foto
        $photo = null;
        if ($request->hasFile('foto_pengaduan')) {
            $photo = $request->file('foto_pengaduan')->store('pengaduan_images', 'public');
        }

        complaint::create([
            'user_id' => Auth::id(),
            'title' => $request->judul_pengaduan,
            'description' => $request->deskripsi_pengaduan,
            'location' => $request->lokasi_pengaduan,
            'photo' => $photo,
        ]);

        return redirect()->back()->with('success', 'Data Berhasil Disimpan!');
    }

    public function show($id): View
    {
        $pengaduan = Complaint::findOrFail($id);
        return view('complaint.pengaduan', compact('pengaduan'));
    }


    public function destroy($id)
    {
        $pengaduan = Complaint::findOrFail($id);
        $pengaduan->delete();

        return redirect()->route('pengaduan.index')->with('success', 'Pengaduan berhasil dihapus.');
    }

    public function upload(Request $request): RedirectResponse
    {
        $request->validate([
            'photo' => 'required|nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $photo = null;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('pengaduan_images', 'public');

            // Simpan path foto ke database atau lakukan tindakan lain yang diperlukan
            return redirect()->back()->with('success', 'Foto berhasil diunggah.');
        }
        return redirect()->back()->with('error', 'Gagal mengunggah foto.');
    }

    public function edit($id)
    {
        $pengaduan = Complaint::findOrFail($id);
        return view('complaints.edit', compact('pengaduan'));
    }

    public function update(Request $request, $id)
    {
        $pengaduan = Complaint::findOrFail($id);

        $request->validate([
            'judul_pengaduan' => 'required',
            'deskripsi_pengaduan' => 'required',
            'lokasi_pengaduan' => 'required',
            'foto_pengaduan' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if($request->hasFile('foto_pengaduan')) {
            if ($pengaduan->photo) {
                Storage::disk('public')->delete($pengaduan->photo);
            }
            $photo = $request->file('foto_pengaduan')->store('pengaduan_images', 'public');
        } else {
            $photo = $pengaduan->photo;
        }

        $pengaduan->update([
            'title' => $request->judul_pengaduan,
            'description' => $request->deskripsi_pengaduan,
            'location' => $request->lokasi_pengaduan,
            'photo' => $photo,
        ]);

        return redirect()->route('pengaduan.index')->with('success', 'Pengaduan berhasil diperbarui.');
    }

    public function response($id)
    {
        $response = Complaint::findOrfail($id);
        return view('responses.create', compact('response'));
    }

    public function responseStore(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'response' => 'required|min:10',
            'status' => 'required',
        ]);

        $complaint = Complaint::findOrFail($id);

        $complaint->update([
            'response' => $request->response,
            'status' => $request->status,
        ]);

        Response::create([
            'complaint_id' => $complaint->id,
            'admin_id' => Auth::id(),
            'response' => $request->response,
        ]);

        return redirect()->route('admin_pengaduan.index');
    }

    public function ResponseIndex()
    {
        $responses = Response::with('complaint')
            ->whereHas('complaint', function ($query) {
                $query->where('user_id', Auth::id());
            })
            ->get();
        return view('responses.index', compact('responses'));
    }

    public function StatusUpdate(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'status' => 'required|in:Pending,Diproses,Selesai,Ditolak',
        ]);

        $complaint = Complaint::findOrFail($id);
        $complaint->update(['status' => $request->status]);

        return redirect()->back()->with('success', 'Status pengaduan berhasil diperbarui.');
    }

    public function selesai()
    {
        $pengaduan = Complaint::with('user')
            ->where('status', 'Selesai')
            ->get();

        return view('complaints.finish', compact('pengaduan'));
    }
}
