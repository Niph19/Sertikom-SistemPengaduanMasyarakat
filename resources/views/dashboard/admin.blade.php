@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4">
        {{-- Total Pengaduan --}}
        <div class="grid grid-cols-1 gap-4 md:gap-4">
            <div
                class="flex items-center gap-5 rounded-2xl border border-gray-200 bg-white p-2 dark:border-gray-800 dark:bg-white/[0.03] md:p-6">
                <div class="flex items-center justify-center w-14 h-14 bg-gray-100 rounded-xl dark:bg-gray-800">
                    <!-- contoh svg: beri kelas tinggi/width dan display block agar tepat center -->
                    <svg viewBox="0 0 24 24" class="block h-7 w-7 text-gray-500 dark:text-gray-300" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6 1C4.34315 1 3 2.34315 3 4V20C3 21.6569 4.34315 23 6 23H18C19.6569 23 21 21.6569 21 20V8.82843C21 8.03278 20.6839 7.26972 20.1213 6.70711L15.2929 1.87868C14.7303 1.31607 13.9672 1 13.1716 1H6ZM5 4C5 3.44772 5.44772 3 6 3H12V8C12 9.10457 12.8954 10 14 10H19V20C19 20.5523 18.5523 21 18 21H6C5.44772 21 5 20.5523 5 20V4ZM18.5858 8L14 3.41421V8H18.5858Z"
                                fill="#D0D5DD"></path>
                        </g>
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
            <div
                class="flex items-center gap-4 rounded-2xl border border-gray-200 bg-white p-2 dark:border-gray-800 dark:bg-white/[0.03] md:p-6">
                <div class="flex items-center justify-center w-14 h-14 bg-gray-100 rounded-xl dark:bg-gray-800">
                    <!-- contoh svg: beri kelas tinggi/width dan display block agar tepat center -->
                    <svg viewBox="0 0 24 24" class="block h-9 w-9 text-gray-500 dark:text-gray-300" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z"
                                stroke="#D0D5DD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                fill="#1D2939"></path>
                            <path d="M12 6V12" stroke="#D0D5DD" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path d="M16.24 16.24L12 12" stroke="#D0D5DD" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </g>
                    </svg>

                </div>
                <div class=" flex flex-col justify-center gap-1">
                    <span class="text-lg h-auto text-gray-500 dark:text-gray-300">Total Pending</span>
                    <h4 class="font-bold text-gray-800 text-2xl dark:text-white/90">{{ $totalPending }}</h4>
                    <span class="text-md h-auto text-gray-500 dark:text-gray-400">Menunggu diproses</span>
                </div>
            </div>
        </div>
        {{-- Total Proses --}}
        <div class="grid grid-cols-1 gap-4 md:gap-4">
            <div
                class="flex items-center gap-5 rounded-2xl border border-gray-200 bg-white p-2 dark:border-gray-800 dark:bg-white/[0.03] md:p-6">
                <div class="flex items-center justify-center w-14 h-14 bg-gray-100 rounded-xl dark:bg-gray-800">
                    <!-- contoh svg: beri kelas tinggi/width dan display block agar tepat center -->
                    <svg fill="#D0D5DD" viewBox="0 0 24 24" class="block h-8 w-8" xmlns="http://www.w3.org/2000/svg"
                        enable-background="new 0 0 24 24">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M8.5,6H6.7C8.2,4.7,10,4,12,4c0.3,0,0.6,0,0.9,0.1c0,0,0,0,0,0c0.5,0.1,1-0.3,1.1-0.9c0.1-0.5-0.3-1-0.9-1.1C12.7,2,12.4,2,12,2C9.6,2,7.3,2.9,5.5,4.4V3c0-0.6-0.4-1-1-1s-1,0.4-1,1v4c0,0.6,0.4,1,1,1h4c0.6,0,1-0.4,1-1S9.1,6,8.5,6z M7,14.5c-0.6,0-1,0.4-1,1v1.8C4.7,15.8,4,14,4,12c0-0.3,0-0.6,0.1-0.9c0,0,0,0,0,0c0.1-0.5-0.3-1-0.9-1.1c-0.5-0.1-1,0.3-1.1,0.9C2,11.3,2,11.6,2,12c0,2.4,0.9,4.7,2.4,6.5H3c-0.6,0-1,0.4-1,1s0.4,1,1,1h4c0.3,0,0.6-0.2,0.8-0.4c0,0,0,0,0,0c0,0,0,0,0,0c0-0.1,0.1-0.2,0.1-0.3c0-0.1,0-0.1,0-0.2c0,0,0-0.1,0-0.1v-4C8,14.9,7.6,14.5,7,14.5z M21,5.5c0.6,0,1-0.4,1-1s-0.4-1-1-1h-4c-0.1,0-0.1,0-0.2,0c0,0,0,0,0,0c-0.1,0-0.2,0.1-0.3,0.1c0,0,0,0,0,0c-0.1,0.1-0.2,0.1-0.2,0.2c0,0,0,0,0,0c0,0,0,0,0,0c0,0.1-0.1,0.2-0.1,0.2c0,0.1,0,0.1,0,0.2c0,0,0,0.1,0,0.1v4c0,0.6,0.4,1,1,1s1-0.4,1-1V6.7c1.3,1.4,2,3.3,2,5.3c0,0.3,0,0.6-0.1,0.9c-0.1,0.5,0.3,1,0.9,1.1c0,0,0.1,0,0.1,0c0.5,0,0.9-0.4,1-0.9c0-0.4,0.1-0.7,0.1-1.1c0-2.4-0.9-4.7-2.4-6.5H21z M20.3,16.5c-0.1-0.1-0.2-0.2-0.3-0.3c0,0,0,0,0,0c0,0,0,0,0,0c-0.1-0.1-0.2-0.1-0.3-0.1c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0h-4c-0.6,0-1,0.4-1,1s0.4,1,1,1h1.8c-1.4,1.3-3.3,2-5.3,2c-0.3,0-0.6,0-0.9-0.1c0,0,0,0,0,0c-0.5-0.1-1,0.3-1.1,0.9s0.3,1,0.9,1.1c0.4,0,0.7,0.1,1.1,0.1c2.4,0,4.7-0.9,6.5-2.4V21c0,0.6,0.4,1,1,1s1-0.4,1-1v-4C20.5,16.8,20.4,16.6,20.3,16.5C20.3,16.5,20.3,16.5,20.3,16.5z">
                            </path>
                        </g>
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
            <div
                class="flex items-center gap-5 rounded-2xl border border-gray-200 bg-white p-2 dark:border-gray-800 dark:bg-white/[0.03] md:p-6">
                <div class="flex items-center justify-center w-14 h-14 bg-gray-100 rounded-xl dark:bg-gray-800">
                    <!-- contoh svg: beri kelas tinggi/width dan display block agar tepat center -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="block h-8 w-8 text-gray-500 dark:text-gray-300"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
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
    </div>
    <div class="flex flex-col lg:flex-row gap-4 mt-4">
        <div class="w-full lg:w-3/5 rounded-2xl border border-gray-200 bg-white px-5 pb-4 pt-5 dark:border-gray-800 dark:bg-white/[0.03] sm:px-6 sm:pt-6">
            <div class="flex flex-col gap-4 mb-4 sm:flex-row sm:justify-between">
                <div class="w-full">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
                        Statistik Pengaduan
                    </h3>
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                        Jumlah pengaduan per bulan tahun {{ date('Y') }}
                    </p>
                </div>
            </div>
            <div class="max-w-full overflow-x-auto custom-scrollbar">
                <div id="chartPengaduan" class="min-w-full"></div>
            </div>
        </div>
        <div class="w-full lg:w-2/5 rounded-2xl border border-gray-200 bg-white pt-4 pb-3 px-5 dark:border-gray-800 dark:bg-white/[0.03]">
            <div class="mb-4">
                <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
                    Pengaduan Terbaru
                </h3>
            </div>
            <div class="overflow-hidden">
                <table class="w-full">
                    <thead>
                        <tr class="border-gray-200 border-b dark:border-gray-700">
                            <th scope="col"
                                class="px-3 py-2 font-normal text-gray-500 text-center text-theme-xs dark:text-gray-400">
                                Foto</th>
                            <th scope="col"
                                class="px-3 py-2 font-normal text-gray-500 text-start text-theme-xs dark:text-gray-400">
                                Judul Pengaduan</th>
                            <th scope="col"
                                class="px-3 py-2 font-normal text-gray-500 text-center text-theme-xs dark:text-gray-400">
                                Lokasi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        @foreach ($pengaduan as $complaint)
                            <tr>
                                <td class="py-2 px-3 whitespace-nowrap">
                                    <div class="flex items-center justify-center">
                                        <div class="shrink-0 w-10 h-10">
                                            <img class="w-10 h-10 rounded-md object-cover"
                                                src="{{ asset('storage/' . $complaint->photo) }}" alt="Foto Pengaduan">
                                        </div>
                                    </div>
                                </td>
                                <td class="px-3 py-2">
                                    <div class="text-xs font-semibold text-gray-500 dark:text-white line-clamp-2">{{ $complaint->title }}
                                    </div>
                                </td>
                                <td class="px-3 py-2 text-center whitespace-nowrap">
                                    <div class="text-xs text-gray-500 dark:text-gray-400">
                                        {{ Str::limit($complaint->location, 10) }}</div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="px-3 pt-3.5 border-t border-gray-200 dark:border-gray-700">
                    <a href="{{ route('admin_pengaduan.index') }}"
                        class="block text-center text-xs font-medium dark:text-blue-300 hover:underline cursor-pointer">
                        Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Data terbaru --}}
    <script>
        document.addEventListener("DOMContentLoaded", function () {
    var options = {
        series: [{
            name: 'Pengaduan',
            data: {{ json_encode($monthlyData) }}
        }],
        chart: {
            type: 'area',
            height: 260,
            toolbar: { show: false },
            fontFamily: 'inherit',
            zoom: { enabled: false },
            animations: { enabled: false },
        },
        colors: ['#465FFF'],
        fill: {
            type: 'gradient',
            gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.4,
                opacityTo: 0,
            }
        },
        stroke: {
            curve: 'smooth',
            width: 2,
        },
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
            labels: {
                style: { fontSize: '11px' }
            },
            crosshairs: { show: false }
        },
        yaxis: {
            min: 0,
            tickAmount: 5,
            labels: {
                style: { fontSize: '11px' },
                formatter: (val) => Math.floor(val)
            }
        },
        tooltip: {
            enabled: true,
            shared: false,       
            intersect: false,   
            theme: 'light',
            x: { show: true },
            y: {
                formatter: (val) => val !== undefined && val !== null ? val + ' pengaduan' : val
            }
        },
        states: {
            normal: {
                filter: { type: 'none' }
            },
            hover: {
                filter: { type: 'none' }
            },
            active: {
                filter: { type: 'none' }
            }
        },
        grid: {
            strokeDashArray: 5,
            padding: { top: 0, right: 0, bottom: 0, left: 0 }
        },
        dataLabels: { enabled: false },
        responsive: [{
            breakpoint: 1024,
            options: {
                chart: { height: 250 }
            }
        }]
    };

    var chart = new ApexCharts(document.querySelector("#chartPengaduan"), options);
    chart.render();
});
    </script>
@endsection