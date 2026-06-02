<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Complaint;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        $user = Auth::user();

        if ($user->role === 'admin') {

        $complaintsPerBulan = [];
        for ($bulan = 1; $bulan <= 6; $bulan++) {
            $complaintsPerBulan[] = Complaint::whereMonth('created_at', $bulan)
            ->whereYear('created_at', Carbon::now()->year)
            ->count();
        }
            $pengaduan = Complaint::all();
            $totalComplaints = $pengaduan->count();
            $totalPending = $pengaduan->where('status', 'Pending')->count();
            $totalDiproses = $pengaduan->where('status', 'Diproses')->count();
            $totalSelesai = $pengaduan->where('status', 'Selesai')->count();
            $totalDitolak = $pengaduan->where('status', 'Ditolak')->count();
            return view('dashboard.admin', compact('pengaduan', 'totalComplaints', 'totalPending', 'totalDiproses', 'totalSelesai', 'totalDitolak', 'complaintsPerBulan'));
        }

        $pengaduan = Complaint::with('user')
            ->where('user_id', $user->id)
            ->get();

        $data = Complaint::where('user_id', Auth::id())->get();
        $totalComplaints = $data->count();
        $totalPending = $data->where('status', 'Pending')->count();
        $totalDiproses = $data->where('status', 'Diproses')->count();
        $totalSelesai = $data->where('status', 'Selesai')->count();
        $totalDitolak = $data->where('status', 'Ditolak')->count();
        return view('dashboard.user', compact('pengaduan', 'data', 'totalComplaints', 'totalPending', 'totalDiproses', 'totalSelesai', 'totalDitolak'));
    }
}
