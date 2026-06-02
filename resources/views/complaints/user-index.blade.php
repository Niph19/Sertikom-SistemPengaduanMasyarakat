@extends('layouts.app')

@section('content')
    <div>
        <div class="rounded-2xl border border-gray-200 bg-white pt-4 dark:border-gray-800 dark:bg-white/[0.03]">
            <!-- Header -->
            <div class="flex flex-col gap-2 px-5 mb-4 sm:flex-row sm:items-center sm:justify-between sm:px-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">Daftar Pengaduan</h3>
                </div>
                {{-- Tombol Sort Status --}}
                <div class="flex items-center gap-2">
                    <span class="text-sm text-gray-500 dark:text-gray-400">Urutkan Status:</span>

                    <a href="{{ request()->fullUrlWithQuery(['sort_status' => 'asc']) }}"
                        class="px-3 py-1.5 text-sm rounded-lg border transition
                    {{ $sortStatus === 'asc'
        ? 'bg-blue-600 text-white border-blue-600'
        : 'bg-white text-gray-600 border-gray-300 hover:bg-gray-50 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600' }}">
                        ↑ Ascending
                    </a>

                    <a href="{{ request()->fullUrlWithQuery(['sort_status' => 'desc']) }}"
                        class="px-3 py-1.5 text-sm rounded-lg border transition
                    {{ $sortStatus === 'desc'
        ? 'bg-blue-600 text-white border-blue-600'
        : 'bg-white text-gray-600 border-gray-300 hover:bg-gray-50 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600' }}">
                        ↓ Descending
                    </a>
                </div>
            </div>

            <!-- Table -->
            <div class="overflow-hidden">
                <div class="max-w-full px-5 overflow-x-hidden">
                    <table class="min-w-full">
                        <thead>
                            <tr class="border-gray-200 border-y dark:border-gray-700">
                                <th scope="col"
                                    class="px-4 py-3 font-normal text-gray-500 text-center text-theme-sm dark:text-gray-400 ">
                                    No</th>
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
                                {{-- Kondisi ketika pengaduan tidak ada status pending dan diproses, maka actions hilang
                                --}}
                                @if($pengaduan->whereIn('status', ['Pending', 'Diproses'])->count() > 0)
                                    <th scope="col"
                                        class="px-4 py-3 font-normal text-gray-500 text-center text-theme-sm dark:text-gray-400">
                                        Actions</th>
                                @endif
                            </tr>
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
                                        <div class="text-sm font-bold text-gray-500 dark:text-white">{{ $complaint->title }}
                                        </div>
                                        <div class="text-sm text-gray-500 dark:text-gray-400 ">
                                            {{ Str::limit($complaint->description, 70) }}</div>
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
                                    @if($complaint->status === "Pending" || $complaint->status === "Diproses")
                                        <td class="p-4 text-white whitespace-nowrap">
                                            <div class="flex gap-1.5 items-center justify-center">
                                                @if($complaint->status === 'Pending')
                                                    <a href="{{ route('pengaduan.edit', $complaint->id) }}"
                                                        class="text-blue-300 hover:text-blue-500">Edit</a>
                                                @endif
                                                @if($complaint->status === 'Pending' || $complaint->status === 'Diproses')
                                                    <form id="delete-id-{{ $complaint->id }}"
                                                        action="{{ route('pengaduan.destroy', $complaint->id) }}" method="POST"
                                                        class="form-delete">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="text-red-300 items-center justfiy-center" type="submit"
                                                            onclick="confirmDelete()">
                                                            Delete
                                                        </button>
                                                @endif
                                                </form>
                                            </div>
                                        </td>
                                    @endif
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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const deleteForms = document.querySelectorAll('.form-delete');

            deleteForms.forEach(form => {
                form.addEventListener('submit', function (e) {
                    e.preventDefault();

                    Swal.fire({
                        title: 'Apakah Anda yakin?',
                        text: "Data yang dihapus tidak dapat dikembalikan!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Ya, Hapus!',
                        cancelButtonText: 'Batal',
                        reverseButtons: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection