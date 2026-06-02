<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Complaint;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->role === 'admin') {

            $pengaduan = Complaint::with('user')->latest('created_at')->limit(5)->get();
            $totalComplaints = Complaint::count();
            $totalPending = Complaint::where('status', 'Pending')->count();
            $totalDiproses = Complaint::where('status', 'Diproses')->count();
            $totalSelesai = Complaint::where('status', 'Selesai')->count();
            $totalDitolak = Complaint::where('status', 'Ditolak')->count();
            
            // Hitung data bulanan untuk chart
            $monthlyData = $this->getMonthlyComplaintData();
            
            return view('dashboard.admin', [
                'pengaduan' => $pengaduan,
                'totalComplaints' => $totalComplaints,
                'totalPending' => $totalPending,
                'totalDiproses' => $totalDiproses,
                'totalSelesai' => $totalSelesai,
                'totalDitolak' => $totalDitolak,
                'monthlyData' => $monthlyData,
            ]);
        }

        $pengaduan = Complaint::with('user')->where('user_id', $user->id)->latest('created_at')->limit(3)->get();

        $data = Complaint::where('user_id', Auth::id())->get();
        $totalComplaints = $data->count();
        $totalPending = $data->where('status', 'Pending')->count();
        $totalDiproses = $data->where('status', 'Diproses')->count();
        $totalSelesai = $data->where('status', 'Selesai')->count();
        $totalDitolak = $data->where('status', 'Ditolak')->count();
        
        // Hitung data bulanan untuk chart user
        $monthlyData = $this->getMonthlyComplaintDataForUser($user->id);
        
        return view('dashboard.user', compact('pengaduan', 'data', 'totalComplaints', 'totalPending', 'totalDiproses', 'totalSelesai', 'totalDitolak', 'monthlyData'));
    }
    
    /**
     * Hitung jumlah pengaduan per bulan untuk admin
     */
    private function getMonthlyComplaintData()
    {
        $monthlyData = [];
        $currentYear = Carbon::now()->year;
        
        for ($month = 1; $month <= 12; $month++) {
            $startOfMonth = Carbon::createFromDate($currentYear, $month, 1)->startOfMonth();
            $endOfMonth = Carbon::createFromDate($currentYear, $month, 1)->endOfMonth();
            
            $count = Complaint::whereBetween('created_at', [$startOfMonth, $endOfMonth])->count();
            $monthlyData[] = $count;
        }
        
        return $monthlyData;
    }
    
    /**
     * Hitung jumlah pengaduan per bulan untuk user tertentu
     */
    private function getMonthlyComplaintDataForUser($userId)
    {
        $monthlyData = [];
        $currentYear = Carbon::now()->year;
        
        for ($month = 1; $month <= 12; $month++) {
            $startOfMonth = Carbon::createFromDate($currentYear, $month, 1)->startOfMonth();
            $endOfMonth = Carbon::createFromDate($currentYear, $month, 1)->endOfMonth();
            
            $count = Complaint::where('user_id', $userId)
                ->whereBetween('created_at', [$startOfMonth, $endOfMonth])
                ->count();
            $monthlyData[] = $count;
        }
        
        return $monthlyData;
    }
}
