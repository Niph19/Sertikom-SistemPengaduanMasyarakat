<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Complaint;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        $data = Complaint::where('user_id', Auth::id())->get();
        $totalComplaints = $data->count();
        $totalPending = $data->where('status', 'Pending')->count();
        $totalDiproses = $data->where('status', 'Diproses')->count();
        $totalSelesai = $data->where('status', 'Selesai')->count();
        $totalDitolak = $data->where('status', 'Ditolak')->count();
        return view('dashboard.user', compact('data', 'totalComplaints', 'totalPending', 'totalDiproses', 'totalSelesai', 'totalDitolak'));
    }
}
