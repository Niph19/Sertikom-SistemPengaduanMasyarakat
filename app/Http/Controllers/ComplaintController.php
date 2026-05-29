<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ComplaintController extends Controller
{
    public function form()
    {
        return view('complaints.create');
    }
    public function index()
    {
        $user = Auth::user();

        if ($user->role === 'admin') {
            $pengaduan = Complaint::with('user')->get();
            return view('complaints.admin-index', compact('pengaduan'));
        }

        $pengaduan = Complaint::with('user')
            ->where('user_id', $user->id)
            ->get();

        return view('complaints.user-index', compact('pengaduan'));
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

        return redirect()->route('pengaduan.index');
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
}
