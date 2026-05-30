@extends('layouts.app')


@section('content')
    <x-common.page-breadcrumb pageTitle="Respon Complaint" />


    <div class="space-y-6">
        <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">


            {{-- Header --}}
            <div class="mb-6">
                <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">Form Respon Complaint</h3>
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Isi respon untuk complaint yang masuk.</p>
            </div>


            <form action="{{ route('complaints.respon.store', $response->id) }}" method="POST">
                @csrf
                <div class="space-y-5">
                    <div>
                        <label class="block mb-1.5 text-sm font-medium text-gray-700 dark:text-gray-300">
                            Nama Pelapor
                        </label>
                        <input type="text" value="{{ $response->user->name }}" disabled
                            class="w-full rounded-lg border border-gray-200 bg-gray-100 px-4 py-2.5 text-sm text-gray-500 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 cursor-not-allowed" />
                    </div>


                    {{-- Deskripsi Laporan --}}
                    <div>
                        <label class="block mb-1.5 text-sm font-medium text-gray-700 dark:text-gray-300">
                            Deskripsi Laporan
                        </label>
                        <textarea rows="4" disabled
                            class="w-full rounded-lg border border-gray-200 bg-gray-100 px-4 py-2.5 text-sm text-gray-500 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 cursor-not-allowed resize-none">{{ $response->description }}</textarea>
                    </div>


                    {{-- Respon --}}
                    <div>
                        <label class="block mb-1.5 text-sm font-medium text-gray-700 dark:text-gray-300">
                            Respon <span class="text-red-500">*</span>
                        </label>
                        <textarea name="response" rows="5" placeholder="Tulis respon kamu di sini..."
                            class="w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs placeholder:text-gray-400 focus:border-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30 dark:focus:border-blue-800 resize-none">{{ old('response') }}</textarea>
                        @error('response')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>


                    {{-- Status --}}
                    <div>
                        <label class="block mb-1.5 text-sm font-medium text-gray-700 dark:text-gray-300">
                            Update Status
                        </label>
                        <select name="status"
                            class="w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 shadow-theme-xs focus:border-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-500/10 dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:focus:border-blue-800">
                            <option value="Pending" {{ $response->status === 'Pending' ? 'selected' : '' }}>Pending</option>
                            <option value="Diproses" {{ $response->status === 'Diproses' ? 'selected' : '' }}>Diproses
                            </option>
                            <option value="Selesai" {{ $response->status === 'Selesai' ? 'selected' : '' }}>Selesai</option>
                            <option value="Ditolak" {{ $response->status === 'Ditolak' ? 'selected' : '' }}>Tolak
                            </option>
                        </select>
                    </div>


                </div>


                {{-- Actions --}}
                <div class="flex items-center gap-3 mt-8">
                    <button type="submit"
                        class="inline-flex items-center gap-2 rounded-lg bg-blue-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500/40 transition">
                        <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M16.7071 5.29289C17.0976 5.68342 17.0976 6.31658 16.7071 6.70711L8.70711 14.7071C8.31658 15.0976 7.68342 15.0976 7.29289 14.7071L3.29289 10.7071C2.90237 10.3166 2.90237 9.68342 3.29289 9.29289C3.68342 8.90237 4.31658 8.90237 4.70711 9.29289L8 12.5858L15.2929 5.29289C15.6834 4.90237 16.3166 4.90237 16.7071 5.29289Z"
                                fill="currentColor" />
                        </svg>
                        Kirim Respon
                    </button>
                    <a href="{{ route('admin_pengaduan.index') }}"
                        class="inline-flex items-center rounded-lg border border-gray-300 bg-white px-5 py-2.5 text-sm font-semibold text-gray-700 shadow-sm hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-300 dark:hover:bg-white/[0.05] transition">
                        Batal
                    </a>
                </div>


            </form>
        </div>
    </div>
@endsection