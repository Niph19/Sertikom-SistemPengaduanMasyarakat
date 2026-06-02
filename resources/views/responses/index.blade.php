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
                                    class="px-4 py-3 font-normal text-gray-500 text-center text-theme-sm dark:text-gray-400 max-w-10">
                                    No. <br>Pengaduan</th>
                                <th scope="col"
                                    class="px-4 py-3 font-normal text-gray-500 text-center text-theme-sm dark:text-gray-400 max-w-5">
                                    Foto</th>
                                <th scope="col"
                                    class="px-4 py-3 font-normal text-gray-500 text-center text-theme-sm dark:text-gray-400 max-w-13">
                                    Pelapor</th>
                                <th scope="col"
                                    class="px-4 py-3 font-normal text-gray-500 text-start text-theme-sm dark:text-gray-400 max-w-25">
                                    Judul Pengaduan</th>
                                <th scope="col"
                                    class="px-4 py-3 font-normal text-gray-500 text-center text-theme-sm dark:text-gray-400 max-w-15">
                                    Lokasi</th>
                                <th scope="col"
                                    class="px-4 py-3 font-normal text-gray-500 text-center text-theme-sm dark:text-gray-400 max-w-30">
                                    Respon</th>
                                <th scope="col"
                                    class="px-4 py-3 font-normal text-gray-500 text-center text-theme-sm dark:text-gray-400 max-w-10">
                                    Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                            @foreach ($responses as $res)
                                <tr>
                                    <td class="px-4 py-4 text-center whitespace-nowrap max-w-10">
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
                                    <td class="px-4 py-4 text-center whitespace-nowrap max-w-13">
                                        <div class="text-sm text-gray-500 dark:text-gray-400">
                                            {{ Str::limit($res->complaint->user->name, 15) }}</div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap max-w-25">
                                        <div class="text-sm font-semibold text-gray-500 dark:text-white">
                                            {{ $res->complaint->title }}</div>
                                        <div class="text-sm text-gray-500 dark:text-gray-400">
                                            {{ Str::limit($res->complaint->description, 35) }}</div>
                                    </td>
                                    <td class="px-4 py-4 text-center whitespace-nowrap max-w-15">
                                        <div class="text-md text-gray-500 dark:text-gray-400">
                                            {{ Str::limit($res->complaint->location, 15) }}</div>
                                    </td>
                                    <td class="px-4 py-4 text-start whitespace-nowrap max-w-30">
                                        <div class="w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-blue-800 resize-none">
                                            {{ Str::limit($res->response, 41) }}
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-center whitespace-nowrap max-w-10">
                                        <div class="relative inline-block" x-data="{ open: false }">
                                            <button @click="open = !open" type="button">
                                            @if($res->complaint->status === 'Pending')
                                                <span
                                                    class="px-4 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-yellow-200 text-yellow-600">Pending
                                                    v</span>
                                            @elseif($res->complaint->status === 'Diproses')
                                                <span
                                                    class="px-4 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-blue-200 text-blue-600">Diproses
                                                    v</span>
                                            @elseif($res->complaint->status === 'Selesai')
                                                <span
                                                    class="px-4 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-green-200 text-green-600">Selesai
                                                    v</span>
                                            @elseif($res->complaint->status === 'Ditolak')
                                                <span
                                                    class="px-4 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-red-200 text-red-600">Ditolak
                                                    v</span>
                                            @endif
                                            </button>

                                            <div x-show="open" @click.outside="open = false" class="absolute z-50 mt-2 w-40 rounded-lg shadow-lg bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 left-1/2 -translate-x-1/2">
                                                <form action="{{ route('pengaduan.statusUpdate', $res->complaint->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="p-2">
                                                        <select name="status" class="w-full text-sm rounded-md border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white px-2 py-1.5 focus:outline-none">
                                                            <option value="Pending" {{ $res->complaint->status === 'Pending' ? 'selected' : '' }}>Pending</option>
                                                            <option value="Diproses" {{ $res->complaint->status === 'Diproses' ? 'selected' : '' }}>Diproses</option>
                                                            <option value="Selesai" {{ $res->complaint->status === 'Selesai' ? 'selected' : '' }}>Selesai</option>
                                                            <option value="Ditolak" {{ $res->complaint->status === 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
                                                        </select>
                                                    </div>

                                                    <div class="px-2 pb-2">
                                                        <button type="submit" class="w-full text-sm bg-blue-500 hover:bg-blue-600 text-white rounded-md px-3 py-1.5">
                                                            Update Status
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
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
                {{-- <div class="text-sm text-gray-500 dark:text-gray-400">Menampilkan semua pengaduan.</div> --}}
            </div>
        </div>
    </div>
@endsection