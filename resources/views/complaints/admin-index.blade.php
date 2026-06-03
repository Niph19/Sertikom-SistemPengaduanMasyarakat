@extends('layouts.app')

@section('content')
    <div>
        <div class="rounded-2xl border border-gray-200 bg-white pt-4 dark:border-gray-800 dark:bg-white/[0.03]">
            <!-- Header -->
            <div class="flex flex-col gap-2 px-5 mb-4 sm:flex-row sm:items-center sm:justify-between sm:px-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">Daftar Semua Pengaduan</h3>
                </div>

                {{-- Tombol Sort Status --}}
                <div class="flex items-center gap-2">
                    <span class="text-sm text-gray-500 dark:text-gray-400">Urutkan Status:</span>

                    <a href="{{ request()->fullUrlWithQuery(['sort_status' => 'asc']) }}"
    class="px-3 py-1.5 text-sm rounded-lg border transition
    {{ $sortStatus === 'asc'
        ? 'bg-brand-500 text-white border-brand-500'
        : 'bg-white text-gray-600 border-gray-300 hover:bg-gray-50 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600' }}">
    ↑ Ascending
</a>

                    <a href="{{ request()->fullUrlWithQuery(['sort_status' => 'desc']) }}"
    class="px-3 py-1.5 text-sm rounded-lg border transition
    {{ $sortStatus === 'desc'
        ? 'bg-brand-500 text-white border-brand-500'
        : 'bg-white text-gray-600 border-gray-300 hover:bg-gray-50 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600' }}">
    Descending ↓
</a>
                </div>
            </div>

            <!-- Table -->
            <div class="overflow-hidden">
                <div class="max-w-full px-5 overflow-x-auto">
                    <table class="min-w-full">
                        <thead>
                            <tr class="border-gray-200 border-y dark:border-gray-700">
                                <th scope="col"
                                    class="px-4 py-3 font-normal text-gray-500 text-center text-theme-sm dark:text-gray-400 max-w-8">
                                    No.</th>
                                <th scope="col"
                                    class="px-4 py-3 font-normal text-gray-500 text-center text-theme-sm dark:text-gray-400 max-w-5">
                                    Foto</th>
                                <th scope="col"
                                    class="px-4 py-3 font-normal text-gray-500 text-center text-theme-sm dark:text-gray-400 max-w-13">
                                    Pelapor</th>
                                <th scope="col"
                                    class="px-4 py-3 font-normal text-gray-500 text-start text-theme-sm dark:text-gray-400 max-w-40">
                                    Judul Pengaduan</th>
                                <th scope="col"
                                    class="px-4 py-3 font-normal text-gray-500 text-center text-theme-sm dark:text-gray-400 max-w-15">
                                    Lokasi</th>
                                    <th scope="col"
                                    class="px-4 py-3 font-normal text-gray-500 text-center text-theme-sm dark:text-gray-400 max-w-10">
                                    Tanggal</th>
                                <th scope="col"
                                    class="px-4 py-3 font-normal text-gray-500 text-center text-theme-sm dark:text-gray-400 max-w-10">
                                    Status</th>
                                <th scope="col" class="relative pe-2 py-3 capitalize max-w-6">
                                </th>
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
                                                <img class="w-18 h-18 rounded-md object-cover"
                                                    src="{{ asset('storage/' . $complaint->photo) }}" alt="Foto Pengaduan">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-center whitespace-nowrap max-w-13">
                                        <div class="text-sm text-gray-500 max-w-30 dark:text-gray-400">
                                            {{ Str::limit($complaint->user->name, 15) }}</div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap max-w-40">
                                        <div class="text-sm font-semibold text-gray-500 dark:text-white">{{ $complaint->title }}
                                        </div>
                                        <div class="text-sm text-gray-500 dark:text-gray-400">
                                            {{ Str::limit($complaint->description, 50) }}</div>
                                    </td>
                                    <td class="px-4 py-4 text-center whitespace-nowrap max-w-15">
                                        <div class="text-md text-gray-500 dark:text-gray-400">
                                            {{ Str::limit($complaint->location, 15) }}</div>
                                    </td>
                                    <td class="px-4 py-4 text-center whitespace-nowrap max-w-10">
                                        <div class="text-md text-gray-500 dark:text-gray-400">
                                            {{ $complaint->created_at->format('d M Y') }}</div>
                                    </td>
                                    <td class="px-4 py-4 text-center whitespace-nowrap max-w-10">
                                        <div class="relative inline-block" x-data="{ open: false }">
                                            <button @click="open = !open" type="button">
                                                @if($complaint->status === 'Pending')
                                                    <span
                                                        class="px-4 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-yellow-200 text-yellow-600">Pending
                                                        v</span>
                                                @elseif($complaint->status === 'Diproses')
                                                    <span
                                                        class="px-4 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-blue-200 text-blue-600">Diproses
                                                        v</span>
                                                @elseif($complaint->status === 'Selesai')
                                                    <span
                                                        class="px-4 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-green-200 text-green-600">Selesai
                                                        v</span>
                                                @elseif($complaint->status === 'Ditolak')
                                                    <span
                                                        class="px-4 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-red-200 text-red-600">Ditolak
                                                        v</span>
                                                @endif
                                            </button>

                                            <div x-show="open" @click.outside="open = false"
                                                class="absolute z-50 mt-2 w-40 rounded-lg shadow-lg bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 left-1/2 -translate-x-1/2">
                                                <form action="{{ route('pengaduan.statusUpdate', $complaint->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="p-2">
                                                        <select name="status"
                                                            class="w-full text-sm rounded-md border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white px-2 py-1.5 focus:outline-none">
                                                            <option value="Pending" {{ $complaint->status === 'Pending' ? 'selected' : '' }}>Pending</option>
                                                            <option value="Diproses" {{ $complaint->status === 'Diproses' ? 'selected' : '' }}>Diproses</option>
                                                            <option value="Selesai" {{ $complaint->status === 'Selesai' ? 'selected' : '' }}>Selesai</option>
                                                            <option value="Ditolak" {{ $complaint->status === 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
                                                        </select>
                                                    </div>

                                                    <div class="px-2 pb-2">
                                                        <button type="submit"
                                                            class="w-full text-sm bg-blue-500 hover:bg-blue-600 text-white rounded-md px-3 py-1.5">
                                                            Update Status
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="pe-2 py-4 text-sm font-medium text-right whitespace-nowrap max-w-6">
                                        <div class="flex justify-center relative">
                                            <x-common.table-dropdown>
                                                <x-slot name="button">
                                                    <button type="button" id="options-menu" aria-haspopup="true"
                                                        aria-expanded="true" class="text-gray-500 dark:text-gray-400'">
                                                        <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M5.99902 10.245C6.96552 10.245 7.74902 11.0285 7.74902 11.995V12.005C7.74902 12.9715 6.96552 13.755 5.99902 13.755C5.03253 13.755 4.24902 12.9715 4.24902 12.005V11.995C4.24902 11.0285 5.03253 10.245 5.99902 10.245ZM17.999 10.245C18.9655 10.245 19.749 11.0285 19.749 11.995V12.005C19.749 12.9715 18.9655 13.755 17.999 13.755C17.0325 13.755 16.249 12.9715 16.249 12.005V11.995C16.249 11.0285 17.0325 10.245 17.999 10.245ZM13.749 11.995C13.749 11.0285 12.9655 10.245 11.999 10.245C11.0325 10.245 10.249 11.0285 10.249 11.995V12.005C10.249 12.9715 11.0325 13.755 11.999 13.755C12.9655 13.755 13.749 12.9715 13.749 12.005V11.995Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </button>
                                                </x-slot>

                                                <x-slot name="content">
                                                    <a href="{{ route('response.show', $complaint->id) }}"
                                                        class="flex w-full px-3 py-2 font-medium text-center text-gray-500 rounded-lg text-theme-xs hover:bg-gray-100 hover:text-gray-700 dark:text-gray-400 dark:hover:bg-white/5 dark:hover:text-gray-300"
                                                        role="menuitem">
                                                        Respon
                                                    </a>
                                                    <form id="delete-id-{{ $complaint->id }}"
                                                        action="{{ route('pengaduan.destroy', $complaint->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" onclick="confirmDelete('delete-id-{{ $complaint->id }}')"
                                                            class="flex w-full px-3 py-2 font-medium text-center text-gray-500 rounded-lg text-theme-xs hover:bg-gray-100 hover:text-gray-700 dark:text-gray-400 dark:hover:bg-white/5 dark:hover:text-gray-300"
                                                            role="menuitem">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </x-slot>
                                            </x-common.table-dropdown>
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
                <div class="px-6 py-4 border-t border-gray-200 dark:border-white/[0.05]">
    @if ($pengaduan->hasPages())
        <div class="flex items-center justify-between">
            <p class="text-sm text-gray-500 dark:text-gray-400">
                Menampilkan {{ $pengaduan->firstItem() }}–{{ $pengaduan->lastItem() }}
                dari {{ $pengaduan->total() }} pengaduan
            </p>

            <div class="flex items-center gap-1">

                {{-- Prev --}}
                @if ($pengaduan->onFirstPage())
                    <span class="px-3 py-1.5 text-sm rounded-lg border border-gray-200 text-gray-300 cursor-not-allowed dark:border-gray-700 dark:text-gray-600">
                        ← Prev
                    </span>
                @else
                    <a href="{{ $pengaduan->appends(request()->query())->previousPageUrl() }}"
                        class="px-3 py-1.5 text-sm rounded-lg border border-gray-300 text-gray-600 hover:bg-gray-50 transition dark:border-gray-600 dark:text-gray-400 dark:hover:bg-white/5">
                        ← Prev
                    </a>
                @endif

                {{-- Nomor halaman pakai getUrlRange() --}}
                @foreach ($pengaduan->appends(request()->query())->getUrlRange(1, $pengaduan->lastPage()) as $page => $url)
                    @if ($page == $pengaduan->currentPage())
                        <span class="px-3 py-1.5 text-sm rounded-lg border border-brand-500 bg-brand-500 text-white font-semibold">
                            {{ $page }}
                        </span>
                    @else
                        <a href="{{ $url }}"
                            class="px-3 py-1.5 text-sm rounded-lg border border-gray-300 text-gray-600 hover:bg-gray-50 transition dark:border-gray-600 dark:text-gray-400 dark:hover:bg-white/5">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach

                {{-- Next --}}
                @if ($pengaduan->hasMorePages())
                    <a href="{{ $pengaduan->appends(request()->query())->nextPageUrl() }}"
                        class="px-3 py-1.5 text-sm rounded-lg border border-gray-300 text-gray-600 hover:bg-gray-50 transition dark:border-gray-600 dark:text-gray-400 dark:hover:bg-white/5">
                        Next →
                    </a>
                @else
                    <span class="px-3 py-1.5 text-sm rounded-lg border border-gray-200 text-gray-300 cursor-not-allowed dark:border-gray-700 dark:text-gray-600">
                        Next →
                    </span>
                @endif

            </div>
        </div>
    @else
        {{-- Fallback jika semua muat 1 halaman --}}
        <p class="text-sm text-gray-500 dark:text-gray-400">
            Menampilkan semua {{ $pengaduan->total() }} pengaduan
        </p>
    @endif
</div>
            </div>
        </div>
    </div>
    @push('scripts')
<script>
    function confirmDelete(formId) {
        Swal.fire({
            title: 'Hapus Pengaduan?',
            text: 'Data yang dihapus tidak dapat dikembalikan.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#EF4444',
            cancelButtonColor: '#6B7280',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal',
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById(formId).submit();
            }
        });
    }
</script>
@endpush
@endsection