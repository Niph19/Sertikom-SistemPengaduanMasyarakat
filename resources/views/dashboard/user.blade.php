@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-5 gap-4 md:gap-4 xl:grid-cols-5">
        {{-- Total Pengaduan --}}
        <div class="grid grid-cols-1 gap-4 md:gap-4">
            <div class="flex items-center gap-5 rounded-2xl border border-gray-200 bg-white p-2 dark:border-gray-800 dark:bg-white/[0.03] md:p-6">
                <div class="flex items-center justify-center w-14 h-14 bg-gray-100 rounded-xl dark:bg-gray-800">
                    <!-- contoh svg: beri kelas tinggi/width dan display block agar tepat center -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="block h-6 w-6 text-gray-500 dark:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <div class="flex flex-col justify-center gap-1">
                        <span class="text-lg h-auto text-gray-500 dark:text-gray-300">Total Pengaduan</span>
                        <h4 class="font-bold text-gray-800 text-2xl dark:text-white/90">{{ $totalComplaints }}</h4>
                        <span class="text-md h-auto text-gray-500 dark:text-gray-400">Semua Pengaduan</span>
                </div>
            </div>
        </div>
        {{-- Total Pending --}}
        <div class="grid grid-cols-1 gap-4 md:gap-4">
            <div class="flex items-center gap-4 rounded-2xl border border-gray-200 bg-white p-2 dark:border-gray-800 dark:bg-white/[0.03] md:p-6">
                <div class="flex items-center justify-center w-14 h-14 bg-gray-100 rounded-xl dark:bg-gray-800">
                    <!-- contoh svg: beri kelas tinggi/width dan display block agar tepat center -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="block h-6 w-6 text-gray-500 dark:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <div class="flex flex-col justify-center gap-1">
                        <span class="text-lg h-auto text-gray-500 dark:text-gray-300">Total Pending</span>
                        <h4 class="font-bold text-gray-800 text-2xl dark:text-white/90">{{ $totalPending }}</h4>
                        <span class="text-md h-auto text-gray-500 dark:text-gray-400">Menunggu diproses</span>
                </div>
            </div>
        </div>
        {{-- Total Diproses --}}
        <div class="grid grid-cols-1 gap-4 md:gap-4">
            <div class="flex items-center gap-5 rounded-2xl border border-gray-200 bg-white p-2 dark:border-gray-800 dark:bg-white/[0.03] md:p-6">
                <div class="flex items-center justify-center w-14 h-14 bg-gray-100 rounded-xl dark:bg-gray-800">
                    <!-- contoh svg: beri kelas tinggi/width dan display block agar tepat center -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="block h-6 w-6 text-gray-500 dark:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <div class="flex flex-col justify-center gap-1">
                        <span class="text-lg h-auto text-gray-500 dark:text-gray-300">Total Diproses</span>
                        <h4 class="font-bold text-gray-800 text-2xl dark:text-white/90">{{ $totalDiproses }}</h4>
                        <span class="text-md h-auto text-gray-500 dark:text-gray-400">Sedang diproses</span>
                </div>
            </div>
        </div>
        {{-- Total Selesai --}}
        <div class="grid grid-cols-1 gap-4 md:gap-4">
            <div class="flex items-center gap-5 rounded-2xl border border-gray-200 bg-white p-2 dark:border-gray-800 dark:bg-white/[0.03] md:p-6">
                <div class="flex items-center justify-center w-14 h-14 bg-gray-100 rounded-xl dark:bg-gray-800">
                    <!-- contoh svg: beri kelas tinggi/width dan display block agar tepat center -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="block h-6 w-6 text-gray-500 dark:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <div class="flex flex-col justify-center gap-1">
                        <span class="text-lg h-auto text-gray-500 dark:text-gray-300">Total Selesai</span>
                        <h4 class="font-bold text-gray-800 text-2xl dark:text-white/90">{{ $totalSelesai }}</h4>
                        <span class="text-md h-auto text-gray-500 dark:text-gray-400">Pengaduan Selesai</span>
                </div>
            </div>
        </div>
        {{-- Total Ditolak --}}
        <div class="grid grid-cols-1 gap-4 md:gap-4">
            <div class="flex items-center gap-5 rounded-2xl border border-gray-200 bg-white p-2 dark:border-gray-800 dark:bg-white/[0.03] md:p-6">
                <div class="flex items-center justify-center w-14 h-14 bg-gray-100 rounded-xl dark:bg-gray-800">
                    <!-- contoh svg: beri kelas tinggi/width dan display block agar tepat center -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="block h-6 w-6 text-gray-500 dark:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <div class="flex flex-col justify-center gap-1">
                        <span class="text-lg h-auto text-gray-500 dark:text-gray-300">Total Ditolak</span>
                        <h4 class="font-bold text-gray-800 text-2xl dark:text-white/90">{{ $totalDitolak }}</h4>
                        <span class="text-md h-auto text-gray-500 dark:text-gray-400">Pengaduan Ditolak</span>
                </div>
            </div>
        </div>
    </div>
@endsection