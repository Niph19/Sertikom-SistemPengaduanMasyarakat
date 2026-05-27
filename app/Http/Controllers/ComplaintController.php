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
    // public function index() {
    //     $pengaduan = Complaint::all();
    //     return view('complaints.pengaduan', compact('pengaduan'));
    // }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'photo' => 'required',
        ]);

        // complaint::create([

        // ])
        return redirect()->route('pengaduan.index');
    }

    public function show($id): View {
        $pengaduan = Complaint::findOrFail($id);
        return view('complaint.pengaduan', compact('pengaduan'));
    }

    public function index(){
        $role = Auth::user()->role;
        // if ($role == 'admin') {

        //     // admin melihat semua pengaduan
        //     $pengaduan = Complaint::with(['user', 'pengaduan'])
        //         ->get();
        // } else {

        //     // masyarakat melihat milik sendiri
            $pengaduan = Complaint::with(['user', 'pengaduan'])
                ->where('user_id', $role)
                ->get();
        // }

        return view('complaints.laporan_pengaduan', compact('pengaduan'));
    }
}
