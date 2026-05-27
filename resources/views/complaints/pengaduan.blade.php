@extends('layouts.app')

@section('content')
        <div>
        <div class="rounded-2xl border border-gray-200 bg-white pt-4 dark:border-gray-800 dark:bg-white/[0.03]">
            <!-- Header -->
            <div class="flex flex-col gap-2 px-5 mb-4 sm:flex-row sm:items-center sm:justify-between sm:px-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">Daftar Pengaduan</h3>
                </div>
                <div class="flex flex-col gap-3 sm:flex-row sm:items-center">
                    <form>
                        <div class="relative">
                            <button  class="px-3.5 py-2.5 w-full rounded-lg border bg-blue-500 text-white text-sm shadow-theme-xs outline-none">
                                Tambahkan Pengaduan
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Table -->
            <div class="overflow-hidden">
                <div class="max-w-full px-5 overflow-x-auto">
                    <table class="min-w-full">
                        <thead>
                            <tr class="border-gray-200 border-y dark:border-gray-700">
                                <th scope="col" class="px-4 py-3 font-normal text-gray-500 text-start text-theme-sm dark:text-gray-400">No</th>
                                <th scope="col" class="px-4 py-3 font-normal text-gray-500 text-start text-theme-sm dark:text-gray-400">Foto</th>
                            <th scope="col" class="px-4 py-3 font-normal text-gray-500 text-start text-theme-sm dark:text-gray-400">Pelapor</th>

                                <th scope="col" class="px-4 py-3 font-normal text-gray-500 text-start text-theme-sm dark:text-gray-400">Judul Pengaduan</th>
                                <th scope="col" class="px-4 py-3 font-normal text-gray-500 text-start text-theme-sm dark:text-gray-400">Lokasi</th>
                                <th scope="col" class="px-4 py-3 font-normal text-gray-500 text-start text-theme-sm dark:text-gray-400">Status</th>
                                <th scope="col" class="px-4 py-3 font-normal text-gray-500 text-start text-theme-sm dark:text-gray-400">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                            @foreach ($pengaduan as $complaint)
                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-500 dark:text-gray-400">{{ $complaint->id }}</div>
                                    </td>
                                    <td class="py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="shrink-0 w-8 h-8">
                                                <img class="w-8 h-8 rounded-full" src="{{ $complaint->photo ?? asset('images/brand/brand-01.svg') }}" alt="Foto Pengaduan">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-500 dark:text-gray-400">{{ $complaint->user_id }}</div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="text-sm font-bold text-gray-500 dark:text-white">{{ $complaint->title }}</div>
                                        <div class="text-sm text-gray-500 dark:text-gray-400">{{ $complaint->description }}</div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-500 dark:text-gray-400">{{ $complaint->location }}</div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-700">{{ $complaint->status }}</span>
                                    </td>
                                    <td class="p-4 text-white whitespace-nowrap">
                                        <div class="flex gap-1.5">
                                            <a href="" class=" text-blue-500 align-middle">Edit</a>
                                            <form id="" action="" method="POST"
                                                onsubmit="">
                                                @csrf
                                                @method('DELETE')
                                                <button class="text-red-400" type="submit" onclick="confirmDelete(">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                    </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Pagination -->
            <div class="px-6 py-4 border-t border-gray-200 dark:border-white/[0.05]">
                <div class="text-sm text-gray-500 dark:text-gray-400">Menampilkan semua pengaduan.</div>
            </div>
        </div>
    </div>
@endsection