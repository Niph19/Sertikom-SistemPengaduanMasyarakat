@extends('layouts.app')

@section('content')
    <div>
        <div class="rounded-2xl border border-gray-200 bg-white pt-4 dark:border-gray-800 dark:bg-white/[0.03]">
            <!-- Header -->
            <div class="flex flex-col gap-2 px-5 mb-4 sm:flex-row sm:items-center sm:justify-between sm:px-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">Daftar Respon Pengaduan</h3>
                </div>

            </div>

            <!-- Table -->
            <div class="overflow-hidden">
                <div class="max-w-full px-5 overflow-x-auto">
                    <table class="min-w-full">
                        <thead>
                            <tr class="border-gray-200 border-y dark:border-gray-700">
                                <th scope="col"
                                    class="px-4 py-3 font-normal text-gray-500 text-center text-theme-sm dark:text-gray-400 max-w-3">
                                    No.</th>
                                <th scope="col"
                                    class="px-4 py-3 font-normal text-gray-500 text-center text-theme-sm dark:text-gray-400 max-w-5">
                                    Foto</th>
                                <th scope="col"
                                    class="px-4 py-3 font-normal text-gray-500 text-start text-theme-sm dark:text-gray-400 max-w-20">
                                    Judul Pengaduan</th>
                                <th scope="col"
                                    class="px-4 py-3 font-normal text-gray-500 text-center text-theme-sm dark:text-gray-400 max-w-35">
                                    Respon</th>
                                <th scope="col"
                                    class="px-4 py-3 font-normal text-gray-500 text-center text-theme-sm dark:text-gray-400 max-w-10">
                                    Tanggal</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                            @foreach ($responses as $res)
                                <tr>
                                    <td class="px-4 py-4 text-center whitespace-nowrap max-w-3">
                                        <div class="text-lg text-gray-500 dark:text-gray-400">{{ $loop->iteration }}</div>
                                    </td>
                                    <td class="py-4 whitespace-nowrap max-w-5">
                                        <div class="flex items-center justify-center">
                                            <div class="shrink-0 w-18 h-18">
                                                <img class="w-18 h-18 rounded-md object-cover"
                                                    src="{{ asset('storage/' . $res->complaint->photo) }}" alt="Foto Pengaduan">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap max-w-20">
                                        <div class="text-sm font-semibold text-gray-500 dark:text-white">
                                            {{ Str::limit($res->complaint->title, 35) }}</div>
                                        <div class="text-sm text-gray-500 dark:text-gray-400">
                                            {{ Str::limit($res->complaint->description, 35) }}</div>
                                    </td>
                                    <td class="px-4 py-4 text-start whitespace-nowrap max-w-35">
                                        <div class="w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-blue-800 resize-none">
                                            {{ Str::limit($res->response, 41) }}
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-center whitespace-nowrap max-w-10">
                                        <div class="text-md text-gray-500 dark:text-gray-400">
                                            {{ Str::limit($res->complaint->created_at->format('d M Y'), 15) }}</div>
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