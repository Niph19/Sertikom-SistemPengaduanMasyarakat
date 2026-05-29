@extends('layouts.app')

@section('content')
    <x-common.page-breadcrumb pageTitle="From Elements" />
    <div class="grid grid-cols-1 gap-6 xl:grid-cols-2">
        <x-common.component-card title="Default Inputs">

            <form action="{{ route('pengaduan.update', $pengaduan->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if ($errors->any())
                    <div class="text-red-500 text-sm mb-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @method('PUT')
                <div>
                    <label class="mb-1.5 block text-md font-medium text-gray-700 dark:text-gray-400">
                        Judul Pengaduan
                    </label>
                    <input type="text" name="judul_pengaduan" id="judul_pengaduan" value="{{ $pengaduan->title }}"
                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30" />
                </div>

                <div>
                    <label class="mb-1.5 block text-md font-medium text-gray-700 dark:text-gray-400">
                        Deskripsi Pengaduan
                    </label>
                    <textarea rows="6" name="deskripsi_pengaduan" id="deskripsi_pengaduan"
                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">{{ $pengaduan->description }}</textarea>
                </div>

                <div>
                    <label class="mb-1.5 block text-md font-medium text-gray-700 dark:text-gray-400">
                        Lokasi
                    </label>
                    <input type="text" name="lokasi_pengaduan" id="lokasi_pengaduan" value="{{ $pengaduan->location }}"
                        class="dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-gray-300 bg-transparent px-4 py-2.5 text-sm text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30" />
                </div>

                <div>
                    <label class="mb-1.5 block text-md font-medium text-gray-700 dark:text-gray-400">
                        Foto Pengaduan
                    </label>

                    <div class="flex items-center justify-center w-full">
                        <label for="foto_pengaduan"
                            class="flex flex-col items-center justify-center w-full h-64 bg-neutral-secondary-medium border border-dashed border-default-strong rounded-base cursor-pointer hover:bg-neutral-tertiary-medium text-gray-800 placeholder:text-gray-400 focus:ring-3 focus:outline-hidden dark:border-gray-700 dark:bg-gray-900 dark:text-white/90 dark:placeholder:text-white/30">
                            <div class="flex flex-col items-center justify-center text-body pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M15 17h3a3 3 0 0 0 0-6h-.025a5.56 5.56 0 0 0 .025-.5A5.5 5.5 0 0 0 7.207 9.021C7.137 9.017 7.071 9 7 9a4 4 0 1 0 0 8h2.167M12 19v-9m0 0-2 2m2-2 2 2" />
                                </svg>
                                <p class="mb-2 text-sm" id="file-preview-text">
                                    @if ($pengaduan->photo)
                                            File saat ini: <span
                                                class="font-bold text-blue-600">{{ basename($pengaduan->photo) }}</span>
                                                @else
                                                <span class="font-semibold text-gray-700 dark:text-gray-200">Klik untuk mengunggah</span>
                                                @endif
                                        </p>
                                        <p class="text-xs">PNG, JPG, JPEG</p>
                            </div>
                            <input type="file" class="hidden" name="foto_pengaduan" id="foto_pengaduan" />
                        </label>
                    </div>

                </div>

                <div>
                    <button type="submit"
                        class="mt-5 bottom-full bg-blue-500 text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-md w-full rounded-md px-4 py-2.5 focus:outline-none">Ubah Pengaduan</button>
                </div>

            </form>
            <script>
                document.getElementById('foto_pengaduan').addEventListener('change', function (e) {
                    const fileName = e.target.files[0]?.name;
                    const previewText = document.getElementById('file-preview-text');
                    if (fileName) {
                        previewText.innerHTML = `File terpilih: <span class="font-bold text-blue-600">${fileName}</span>`;
                    } else {
                        @if ($pengaduan->photo)
                            previewText.innerHTML = 'File saat ini: <span class="font-bold text-blue-600">{{ basename($pengaduan->photo) }}</span>'
                        @else
                            previewText.innerHTML = '<span class="font-semibold>Klik untuk mengunggah</span>';
                        @endif
                        }
                });
            </script>
        </x-common.component-card>
    </div>
@endsection