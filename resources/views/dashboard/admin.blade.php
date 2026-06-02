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
    <div class="flex gap-4 mt-4">

        {{-- BAR CHART --}}

        <div
            class="w-full min-w-0 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-2xl shadow-xs p-4 md:p-6">
            <div class="flex justify-between border-light border-b pb-3">
                <dl>
                    <dt class="text-body">Total Pengaduan per Bulan</dt>
                    <dd class="text-2xl font-semibold text-heading">{{ $totalComplaints }}</dd>
                </dl>
            </div>

            <div id="bar-chart" class="w-full"></div>
        </div>


        {{-- PIE CHART --}}

        <div class="max-w-sm w-full bg-neutral-primary-soft border border-default rounded-base shadow-xs p-4 md:p-6">

            <div class="flex justify-between items-start w-full">
                <div class="flex-col items-center">
                    <div class="flex items-center mb-1">
                        <h5 class="text-xl font-semibold text-heading me-1">Website traffic</h5>
                        <svg data-popover-target="traffic-info" data-popover-placement="bottom"
                            class="w-4 h-4 text-body hover:text-heading cursor-pointer ms-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.529 9.988a2.502 2.502 0 1 1 5 .191A2.441 2.441 0 0 1 12 12.582V14m-.01 3.008H12M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <div data-popover id="traffic-info" role="tooltip"
                            class="absolute z-10 p-3 invisible inline-block text-sm text-body transition-opacity duration-300 bg-neutral-primary-soft border border-default rounded-base shadow-xs opacity-0 w-72">
                            <div>
                                <h3 class="font-semibold text-heading mb-2">Activity growth - Incremental</h3>
                                <p class="mb-4">Report helps navigate cumulative growth of community activities. Ideally,
                                    the chart should have a growing trend, as stagnating chart signifies a significant
                                    decrease of community activity.</p>
                                <h3 class="font-semibold text-heading mb-2">Calculation</h3>
                                <p class="mb-4">For each date bucket, the all-time volume of activities is calculated. This
                                    means that activities in period n contain all activities up to period n, plus the
                                    activities generated by your community in period.</p>
                                <a href="#" class="flex items-center font-medium text-fg-brand hover:underline">
                                    Read more
                                    <svg class="w-4 h-4 ms-1 rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                    </svg>
                                </a>
                            </div>
                            <div data-popper-arrow></div>
                        </div>
                    </div>
                    <button id="dateRangeButton" data-dropdown-toggle="dateRangeDropdown"
                        data-dropdown-ignore-click-outside-class="datepicker" type="button"
                        class="inline-flex items-center text-fg-brand font-medium hover:underline">
                        31 Nov - 31 Dev
                        <svg class="w-4.5 h-4.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 9-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="dateRangeDropdown"
                        class="z-10 hidden bg-neutral-primary-soft rounded-base shadow-xs border border-default w-80 lg:w-112">
                        <div id="date-range-picker" date-rangepicker class="flex items-center p-2">
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-body" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Zm3-7h.01v.01H8V13Zm4 0h.01v.01H12V13Zm4 0h.01v.01H16V13Zm-8 4h.01v.01H8V17Zm4 0h.01v.01H12V17Zm4 0h.01v.01H16V17Z" />
                                    </svg>
                                </div>
                                <input id="datepicker-range-start" name="start" type="text"
                                    class="block w-full ps-9 pe-3 py-2.5 bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs placeholder:text-body"
                                    placeholder="Start date">
                            </div>
                            <span class="mx-4 text-body">to</span>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-body" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Zm3-7h.01v.01H8V13Zm4 0h.01v.01H12V13Zm4 0h.01v.01H16V13Zm-8 4h.01v.01H8V17Zm4 0h.01v.01H12V17Zm4 0h.01v.01H16V17Z" />
                                    </svg>
                                </div>
                                <input id="datepicker-range-end" name="end" type="text"
                                    class="block w-full ps-9 pe-3 py-2.5 bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs placeholder:text-body"
                                    placeholder="End date">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end items-center">
                    <button id="widgetDropdownButton" data-dropdown-toggle="widgetDropdown" data-dropdown-placement="bottom"
                        type="button"
                        class="inline-flex items-center justify-center text-body bg-neutral-primary-soft hover:bg-neutral-tertiary hover:text-heading focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-medium leading-5 rounded-base text-sm w-9 h-9 focus:outline-none">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="3"
                                d="M6 12h.01m6 0h.01m5.99 0h.01" />
                        </svg>
                        <span class="sr-only">Open dropdown</span>
                    </button>
                    <div id="widgetDropdown"
                        class="z-10 hidden bg-neutral-primary-medium border border-default-medium rounded-base shadow-lg w-44">
                        <ul class="p-2 text-sm text-body font-medium" aria-labelledby="widgetDropdownButton">
                            <li>
                                <a href="#"
                                    class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded">
                                    <svg class="w-4 h-4 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M18 5V4a1 1 0 0 0-1-1H8.914a1 1 0 0 0-.707.293L4.293 7.207A1 1 0 0 0 4 7.914V20a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-5M9 3v4a1 1 0 0 1-1 1H4m11.383.772 2.745 2.746m1.215-3.906a2.089 2.089 0 0 1 0 2.953l-6.65 6.646L9 17.95l.739-3.692 6.646-6.646a2.087 2.087 0 0 1 2.958 0Z" />
                                    </svg>
                                    Edit widget
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded">
                                    <svg class="w-4 h-4 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M12 13V4M7 14H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-2m-1-5-4 5-4-5m9 8h.01" />
                                    </svg>
                                    Download data
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded">
                                    <svg class="w-4 h-4 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M8 8v8m0-8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 8a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8-8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 0a4 4 0 0 1-4 4h-1a3 3 0 0 0-3 3" />
                                    </svg>
                                    Add to repository
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded">
                                    <svg class="w-4 h-4 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                                    </svg>
                                    Delete widget
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Line Chart -->
            <div class="py-6" id="pie-chart" style="width: 100%; height: 420px;"></div>

            <div class="grid grid-cols-1 items-center border-light border-t justify-between">
            </div>

        </div>



    </div>
    {{-- Data terbaru --}}
    <div class="mt-4 rounded-2xl border border-gray-200 bg-white pt-1 dark:border-gray-800 dark:bg-white/[0.03]">
        <div class="overflow-hidden">
            <div class="max-w-full px-5 overflow-x-auto">
                <table class="min-w-full">
                    <thead>
                        <tr class="border-gray-200 border-y dark:border-gray-700">
                            <th scope="col" class="px-4 py-3 font-normal text-gray-500 text-center text-theme-sm dark:text-gray-400 max-w-10">No.</th>
                            <th scope="col" class="px-4 py-3 font-normal text-gray-500 text-center text-theme-sm dark:text-gray-400 max-w-5">Foto</th>
                            <th scope="col" class="px-4 py-3 font-normal text-gray-500 text-center text-theme-sm dark:text-gray-400 max-w-15">Pelapor</th>
                            <th scope="col" class="px-4 py-3 font-normal text-gray-500 text-start text-theme-sm dark:text-gray-400 max-w-55">Judul Pengaduan</th>
                            <th scope="col" class="px-4 py-3 font-normal text-gray-500 text-center text-theme-sm dark:text-gray-400 max-w-20">Lokasi</th>
                            <th scope="col" class="px-4 py-3 font-normal text-gray-500 text-center text-theme-sm dark:text-gray-400 max-w-13">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        @foreach ($pengaduan as $complaint)
                            <tr>
                                <td class="px-4 py-4 text-center whitespace-nowrap max-w-10">
                                    <div class="text-lg text-gray-500 dark:text-gray-400">{{ $loop->iteration }}</div>
                                </td>
                                <td class="py-4 whitespace-nowrap max-w-5">
                                    <div class="flex items-center justify-center">
                                        <div class="shrink-0 w-18 h-18">
                                            <img class="w-18 h-18 rounded-md object-cover" src="{{ asset('storage/' . $complaint->photo) }}" alt="Foto Pengaduan">
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-center whitespace-nowrap max-w-15">
                                    <div class="text-sm text-gray-500 max-w-30 dark:text-gray-400">{{ Str::limit($complaint->user->name, 15) }}</div>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap max-w-55">
                                    <div class="text-sm font-semibold text-gray-500 dark:text-white">{{ $complaint->title }}</div>
                                    <div class="text-sm text-gray-500 dark:text-gray-400">{{ Str::limit($complaint->description, 70) }}</div>
                                </td>
                                <td class="px-4 py-4 text-center whitespace-nowrap max-w-20">
                                    <div class="text-md text-gray-500 dark:text-gray-400">{{ Str::limit($complaint->location, 15) }}</div>
                                </td>
                                <td class="px-4 py-4 text-center whitespace-nowrap max-w-13">
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
                <div class="px-6 py-4 border-t border-gray-200 dark:border-white/[0.05]">
                    <a href="{{ route('pengaduan.index') }}"
                        class="block mx-auto text-center text-base font-medium text-gray-700 dark:text-gray-400 hover:dark:text-gray-500 hover:underline cursor-pointer">Lihat
                        Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>

        // BAR CHART
        const chartData = {!! json_encode($complaintsPerBulan) !!};
        const maxVal = Math.max(...chartData);
        const dynamicTickAmount = (maxVal > 0 && maxVal <= 5) ? maxVal : undefined;
        const options = {
            series: [
                {
                    name: "Total Pengaduan",
                    color: "#3B82F6",
                    data: chartData,
                },
            ],
            chart: {
                type: "bar",
                width: "100%",
                height: 420,
                parentHeightOffset: 0,
                toolbar: {
                    show: false,
                },
                foreColor: "#9CA3AF",
                responsive: [
            {
                breakpoint: 768, // Untuk layar kecil
                options: {
                    chart: {
                        width: "100%",
                    },
                },
            },
        ],
            },
            theme: {
                mode: 'light',
            },
            plotOptions: {
                bar: {
                    horizontal: true,
                    columnWidth: "50%",
                    borderRadiusApplication: "end",
                    borderRadius: 6,
                },
            },
            dataLabels: {
                enabled: false,
            },
            xaxis: {
                categories: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun"],
                tickAmount: dynamicTickAmount || undefined,
                labels: {
                    formatter: function (val, index) {
                        return index;
                    },
                    style: {
                        fontFamily: "Inter, sans-serif",
                    }
                },
                axisTicks: { show: false },
                axisBorder: { show: false },
            },
            grid: {
                show: true,
                strokeDashArray: 4,
                padding: {
                    left: 2,
                    right: 2,
                    top: -20
                },
            },
        };

        document.addEventListener("DOMContentLoaded", function () {
            if (document.getElementById("bar-chart") && typeof ApexCharts !== 'undefined') {
                const chart = new ApexCharts(document.getElementById("bar-chart"), options);
                chart.render();
            }
        });

        // PIE CHART

        // Get the CSS variable --color-brand and convert it to hex for ApexCharts
        const getBrandColor = () => {
            // Get the computed style of the document's root element
            const computedStyle = getComputedStyle(document.documentElement);

            // Get the value of the --color-brand CSS variable
            return computedStyle.getPropertyValue('--color-fg-brand').trim() || "#1447E6";
        };

        const getBrandSecondaryColor = () => {
            const computedStyle = getComputedStyle(document.documentElement);
            return computedStyle.getPropertyValue('--color-fg-brand-subtle').trim() || "#1447E6";
        };

        const getBrandTertiaryColor = () => {
            const computedStyle = getComputedStyle(document.documentElement);
            return computedStyle.getPropertyValue('--color-fg-brand-strong').trim() || "#1447E6";
        };

        const getNeutralPrimaryColor = () => {
            const computedStyle = getComputedStyle(document.documentElement);
            return computedStyle.getPropertyValue('--color-neutral-primary').trim() || "#1447E6";
        };

        const brandColor = getBrandColor();
        const brandSecondaryColor = getBrandSecondaryColor();
        const brandTertiaryColor = getBrandTertiaryColor();
        const neutralPrimaryColor = getNeutralPrimaryColor();

        const getChartOptions = () => {
            return {
                series: [52.8, 26.8, 20.4],
                colors: [brandColor, brandSecondaryColor, brandTertiaryColor],
                chart: {
                    height: 420,
                    width: "100%",
                    type: "pie",
                },
                stroke: {
                    colors: [neutralPrimaryColor],
                    lineCap: "",
                },
                plotOptions: {
                    pie: {
                        labels: {
                            show: true,
                        },
                        size: "100%",
                        dataLabels: {
                            offset: -25
                        }
                    },
                },
                labels: ["Pending", "Diproses", "Selesai"],
                dataLabels: {
                    enabled: true,
                    style: {
                        fontFamily: "Inter, sans-serif",
                    },
                },
                legend: {
                    position: "bottom",
                    fontFamily: "Inter, sans-serif",
                },
                yaxis: {
                    labels: {
                        formatter: function (value) {
                            return value + "%"
                        },
                    },
                },
                xaxis: {
                    labels: {
                        formatter: function (value) {
                            return value + "%"
                        },
                    },
                    axisTicks: {
                        show: false,
                    },
                    axisBorder: {
                        show: false,
                    },
                },
            }
        }

        if (document.getElementById("pie-chart") && typeof ApexCharts !== 'undefined') {
    const chart = new ApexCharts(document.getElementById("pie-chart"), getChartOptions());
    chart.render();

    window.addEventListener("resize", () => {
        chart.render();
    });
}


    </script>
@endsection