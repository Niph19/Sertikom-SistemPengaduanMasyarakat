@extends('layouts.app')

@section('content')
    <div>
    <div class="rounded-2xl border border-gray-200 bg-white pt-4 dark:border-gray-800 dark:bg-white/[0.03]">
        <!-- Header -->
        <div class="flex flex-col gap-2 px-5 mb-4 sm:flex-row sm:items-center sm:justify-between sm:px-6">
            <div>
                <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">Daftar Laporan Pengaduan</h3>
            </div>
            
        </div>

        <!-- Table -->
        <div class="overflow-hidden">
            <div class="max-w-full px-5 overflow-x-auto">
                <table class="min-w-full">
                    <thead>
                        <tr class="border-gray-200 border-y dark:border-gray-700">
                            <th scope="col" class="px-4 py-3 font-normal text-gray-500 text-center text-theme-sm dark:text-gray-400 max-w-8">No.</th>
                            <th scope="col" class="px-4 py-3 font-normal text-gray-500 text-center text-theme-sm dark:text-gray-400 max-w-5">Foto</th>
                            <th scope="col" class="px-4 py-3 font-normal text-gray-500 text-center text-theme-sm dark:text-gray-400 max-w-13">Pelapor</th>
                            <th scope="col" class="px-4 py-3 font-normal text-gray-500 text-start text-theme-sm dark:text-gray-400 max-w-50">Judul Pengaduan</th>
                            <th scope="col" class="px-4 py-3 font-normal text-gray-500 text-center text-theme-sm dark:text-gray-400 max-w-15">Lokasi</th>
                            <th scope="col" class="px-4 py-3 font-normal text-gray-500 text-center text-theme-sm dark:text-gray-400 max-w-10">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        @foreach ($pengaduan as $complaint)
                            <tr>
                                <td class="px-4 py-4 text-center whitespace-nowrap max-w-8">
                                    <div class="text-lg text-gray-500 dark:text-gray-400">{{ $loop->iteration }}</div>
                                </td>
                                <td class="py-4 whitespace-nowrap max-w-5">
                                    <div class="flex items-center justify-center">
                                        <div class="shrink-0 w-18 h-18">
                                            <img class="w-18 h-18 rounded-md object-cover" src="{{ asset('storage/' . $complaint->photo) }}" alt="Foto Pengaduan">
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-center whitespace-nowrap max-w-13">
                                    <div class="text-sm text-gray-500 max-w-30 dark:text-gray-400">{{ Str::limit($complaint->user->name, 15) }}</div>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap max-w-50">
                                    <div class="text-sm font-semibold text-gray-500 dark:text-white">{{ $complaint->title }}</div>
                                    <div class="text-sm text-gray-500 dark:text-gray-400">{{ Str::limit($complaint->description, 70) }}</div>
                                </td>
                                <td class="px-4 py-4 text-center whitespace-nowrap max-w-15">
                                    <div class="text-md text-gray-500 dark:text-gray-400">{{ Str::limit($complaint->location, 15) }}</div>
                                </td>
                                <td class="px-4 py-4 text-center whitespace-nowrap max-w-10">
                                    @if($complaint->status === 'Pending')
                                    <span class="px-4 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-yellow-200 text-yellow-600">{{ $complaint->status }}</span>
                                    @elseif($complaint->status === 'Diproses')
                                    <span class="px-4 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-blue-200 text-blue-600">{{ $complaint->status }}</span>
                                    @elseif($complaint->status === 'Selesai')
                                    <span class="px-4 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-green-200 text-green-600">{{ $complaint->status }}</span>
                                    @elseif($complaint->status === 'Ditolak')
                                    <span class="px-4 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-red-200 text-red-600">{{ $complaint->status }}</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pagination -->
        <div class="px-6 py-4 border-t border-gray-200 dark:border-white/[0.05]">
            {{-- <div class="text-sm text-gray-500 dark:text-gray-400">Menampilkan semua pengaduan.</div> --}}
        </div>
    </div>
</div>
@endsection