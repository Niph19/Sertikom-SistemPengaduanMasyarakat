@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-5 gap-4 md:gap-4 xl:grid-cols-5">
        {{-- Total Pengaduan --}}
        <div class="grid grid-cols-1 gap-4 md:gap-4">
            <div class="flex items-center gap-5 rounded-2xl border border-gray-200 bg-white p-2 dark:border-gray-800 dark:bg-white/[0.03] md:p-6">
                <div class="flex items-center justify-center w-14 h-14 bg-gray-100 rounded-xl dark:bg-gray-800">
                    <!-- contoh svg: beri kelas tinggi/width dan display block agar tepat center -->
                    <svg viewBox="0 0 24 24" class="block h-7 w-7 text-gray-500 dark:text-gray-300" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1C4.34315 1 3 2.34315 3 4V20C3 21.6569 4.34315 23 6 23H18C19.6569 23 21 21.6569 21 20V8.82843C21 8.03278 20.6839 7.26972 20.1213 6.70711L15.2929 1.87868C14.7303 1.31607 13.9672 1 13.1716 1H6ZM5 4C5 3.44772 5.44772 3 6 3H12V8C12 9.10457 12.8954 10 14 10H19V20C19 20.5523 18.5523 21 18 21H6C5.44772 21 5 20.5523 5 20V4ZM18.5858 8L14 3.41421V8H18.5858Z" fill="#D0D5DD"></path> </g></svg>
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
                <svg viewBox="0 0 24 24" class="block h-9 w-9 text-gray-500 dark:text-gray-300" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z" stroke="#D0D5DD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="#1D2939" ></path> <path d="M12 6V12" stroke="#D0D5DD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M16.24 16.24L12 12" stroke="#D0D5DD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round""></path> </g></svg>

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
                    <svg fill="#D0D5DD" viewBox="0 0 24 24" class="block h-8 w-8" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M8.5,6H6.7C8.2,4.7,10,4,12,4c0.3,0,0.6,0,0.9,0.1c0,0,0,0,0,0c0.5,0.1,1-0.3,1.1-0.9c0.1-0.5-0.3-1-0.9-1.1C12.7,2,12.4,2,12,2C9.6,2,7.3,2.9,5.5,4.4V3c0-0.6-0.4-1-1-1s-1,0.4-1,1v4c0,0.6,0.4,1,1,1h4c0.6,0,1-0.4,1-1S9.1,6,8.5,6z M7,14.5c-0.6,0-1,0.4-1,1v1.8C4.7,15.8,4,14,4,12c0-0.3,0-0.6,0.1-0.9c0,0,0,0,0,0c0.1-0.5-0.3-1-0.9-1.1c-0.5-0.1-1,0.3-1.1,0.9C2,11.3,2,11.6,2,12c0,2.4,0.9,4.7,2.4,6.5H3c-0.6,0-1,0.4-1,1s0.4,1,1,1h4c0.3,0,0.6-0.2,0.8-0.4c0,0,0,0,0,0c0,0,0,0,0,0c0-0.1,0.1-0.2,0.1-0.3c0-0.1,0-0.1,0-0.2c0,0,0-0.1,0-0.1v-4C8,14.9,7.6,14.5,7,14.5z M21,5.5c0.6,0,1-0.4,1-1s-0.4-1-1-1h-4c-0.1,0-0.1,0-0.2,0c0,0,0,0,0,0c-0.1,0-0.2,0.1-0.3,0.1c0,0,0,0,0,0c-0.1,0.1-0.2,0.1-0.2,0.2c0,0,0,0,0,0c0,0,0,0,0,0c0,0.1-0.1,0.2-0.1,0.2c0,0.1,0,0.1,0,0.2c0,0,0,0.1,0,0.1v4c0,0.6,0.4,1,1,1s1-0.4,1-1V6.7c1.3,1.4,2,3.3,2,5.3c0,0.3,0,0.6-0.1,0.9c-0.1,0.5,0.3,1,0.9,1.1c0,0,0.1,0,0.1,0c0.5,0,0.9-0.4,1-0.9c0-0.4,0.1-0.7,0.1-1.1c0-2.4-0.9-4.7-2.4-6.5H21z M20.3,16.5c-0.1-0.1-0.2-0.2-0.3-0.3c0,0,0,0,0,0c0,0,0,0,0,0c-0.1-0.1-0.2-0.1-0.3-0.1c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0h-4c-0.6,0-1,0.4-1,1s0.4,1,1,1h1.8c-1.4,1.3-3.3,2-5.3,2c-0.3,0-0.6,0-0.9-0.1c0,0,0,0,0,0c-0.5-0.1-1,0.3-1.1,0.9s0.3,1,0.9,1.1c0.4,0,0.7,0.1,1.1,0.1c2.4,0,4.7-0.9,6.5-2.4V21c0,0.6,0.4,1,1,1s1-0.4,1-1v-4C20.5,16.8,20.4,16.6,20.3,16.5C20.3,16.5,20.3,16.5,20.3,16.5z"></path></g></svg>
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
                    <svg xmlns="http://www.w3.org/2000/svg" class="block h-8 w-8 text-gray-500 dark:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
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
                    <svg fill="#D0D5DD" viewBox="0 0 64 64" class="block h-10 w-10" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <rect id="Icons" x="-256" y="-256" width="1280" height="800" style="fill:none;"></rect> <g id="Icons1" serif:id="Icons"> <g id="Strike"> </g> <g id="H1"> </g> <g id="H2"> </g> <g id="H3"> </g> <g id="list-ul"> </g> <g id="hamburger-1"> </g> <g id="hamburger-2"> </g> <g id="list-ol"> </g> <g id="list-task"> </g> <g id="trash"> </g> <g id="vertical-menu"> </g> <g id="horizontal-menu"> </g> <g id="sidebar-2"> </g> <g id="Pen"> </g> <g id="Pen1" serif:id="Pen"> </g> <g id="clock"> </g> <g id="external-link"> </g> <g id="hr"> </g> <g id="info"> </g> <g id="warning"> </g> <g id="plus-circle"> </g> <path id="denied" d="M32.266,7.951c13.246,0 24,10.754 24,24c0,13.246 -10.754,24 -24,24c-13.246,0 -24,-10.754 -24,-24c0,-13.246 10.754,-24 24,-24Zm-15.616,11.465c-2.759,3.433 -4.411,7.792 -4.411,12.535c0,11.053 8.974,20.027 20.027,20.027c4.743,0 9.102,-1.652 12.534,-4.411l-28.15,-28.151Zm31.048,25.295c2.87,-3.466 4.596,-7.913 4.596,-12.76c0,-11.054 -8.974,-20.028 -20.028,-20.028c-4.847,0 -9.294,1.726 -12.76,4.596l28.192,28.192Z"></path> <g id="minus-circle"> </g> <g id="vue"> </g> <g id="cog"> </g> <g id="logo"> </g> <g id="radio-check"> </g> <g id="eye-slash"> </g> <g id="eye"> </g> <g id="toggle-off"> </g> <g id="shredder"> </g> <g id="spinner--loading--dots-" serif:id="spinner [loading, dots]"> </g> <g id="react"> </g> <g id="check-selected"> </g> <g id="turn-off"> </g> <g id="code-block"> </g> <g id="user"> </g> <g id="coffee-bean"> </g> <g id="coffee-beans"> <g id="coffee-bean1" serif:id="coffee-bean"> </g> </g> <g id="coffee-bean-filled"> </g> <g id="coffee-beans-filled"> <g id="coffee-bean2" serif:id="coffee-bean"> </g> </g> <g id="clipboard"> </g> <g id="clipboard-paste"> </g> <g id="clipboard-copy"> </g> <g id="Layer1"> </g> </g> </g></svg>
                </div>
                <div class="flex flex-col justify-center gap-1">
                        <span class="text-lg h-auto text-gray-500 dark:text-gray-300">Total Ditolak</span>
                        <h4 class="font-bold text-gray-800 text-2xl dark:text-white/90">{{ $totalDitolak }}</h4>
                        <span class="text-md h-auto text-gray-500 dark:text-gray-400">Pengaduan Ditolak</span>
                </div>
            </div>
        </div>
            </div>
            <div class="mt-4 rounded-2xl border border-gray-200 bg-white pt-1 dark:border-gray-800 dark:bg-white/[0.03]">
                <div class="overflow-hidden">
                    <div class="max-w-full px-5 overflow-x-auto">
                        <table class="min-w-full">
                            <thead>
                                <tr class="border-gray-200 border-b dark:border-gray-700">
                                    <th scope="col"
                                        class="px-4 py-3 font-normal text-gray-500 text-center text-theme-sm dark:text-gray-400">No
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3 font-normal text-gray-500 text-center text-theme-sm dark:text-gray-400">
                                        Foto</th>
                                    <th scope="col"
                                        class="px-4 py-3 font-normal text-gray-500 text-start text-theme-sm dark:text-gray-400">
                                        Judul Pengaduan</th>
                                    <th scope="col"
                                        class="px-4 py-3 font-normal text-gray-500 text-center text-theme-sm dark:text-gray-400">
                                        Lokasi</th>
                                    <th scope="col"
                                        class="px-4 py-3 font-normal text-gray-500 text-center text-theme-sm dark:text-gray-400">
                                        Tanggal</th>
                                    <th scope="col"
                                        class="px-4 py-3 font-normal text-gray-500 text-center text-theme-sm dark:text-gray-400">
                                        Status</th>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                @foreach ($pengaduan as $complaint)
                                    <tr>
                                        <td class="px-4 py-4 text-center whitespace-nowrap">
                                            <div class="text-lg  text-gray-500 dark:text-gray-400">{{ $loop->iteration }}</div>
                                        </td>
                                        <td class="py-4 whitespace-nowrap">
                                            <div class="flex items-center justify-center">
                                                <div class="shrink-0 w-18 h-18">
                                                    <img class="w-18 h-18 rounded-md object-cover"
                                                        src="{{ asset('storage/' . $complaint->photo) }}" alt="Foto Pengaduan">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap">
                                            <div class="text-sm font-bold text-gray-500 dark:text-white">{{ $complaint->title }}</div>
                                            <div class="text-sm text-gray-500 dark:text-gray-400 ">
                                                {{ Str::limit($complaint->description, 95) }}</div>
                                        </td>
                                        <td class="px-4 py-4 text-center whitespace-nowrap">
                                            <div class="text-md text-gray-500 dark:text-gray-400">
                                                {{ Str::limit($complaint->location, 15) }}</div>
                                        </td>
                                        <td class="px-4 py-4 text-center whitespace-nowrap">
                                            <div class="text-md text-gray-500 dark:text-gray-400">
                                                {{ $complaint->created_at->format('d M Y') }}</div>
                                        </td>
                                        <td class="px-4 py-4 text-center whitespace-nowrap">
                                            @if($complaint->status === 'Pending')
                                                <span
                                                    class="px-4 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-yellow-200 text-yellow-600">{{ $complaint->status }}</span>
                                            @elseif($complaint->status === 'Diproses')
                                                <span
                                                    class="px-4 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-blue-200 text-blue-600">{{ $complaint->status }}</span>
                                            @elseif($complaint->status === 'Selesai')
                                                <span
                                                    class="px-4 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-green-200 text-green-600">{{ $complaint->status }}</span>
                                            @elseif($complaint->status === 'Ditolak')
                                                <span
                                                    class="px-4 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-red-200 text-red-600">{{ $complaint->status }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="px-6 py-4 border-t border-gray-200 dark:border-white/[0.05]">
                            <a href="{{ route('pengaduan.index') }}" class="block mx-auto text-center text-base font-medium text-gray-700 dark:text-gray-400 hover:dark:text-gray-500 hover:underline cursor-pointer">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>

            

@endsection