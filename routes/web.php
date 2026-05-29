<?php

use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // dashboard pages
Route::get('/', function () {
    return view('pages.dashboard.ecommerce', ['title' => 'E-commerce Dashboard']);
})->name('dashboard');

// calender pages
Route::get('/calendar', function () {
    return view('pages.calender', ['title' => 'Calendar']);
})->name('calendar');

// profile pages
Route::get('/profile', function () {
    return view('pages.profile', ['title' => 'Profile']);
})->name('profile');

// form pages
Route::get('/form-elements', function () {
    return view('pages.form.form-elements', ['title' => 'Form Elements']);
})->name('form-elements');

// tables pages
Route::get('/basic-tables', function () {
    return view('pages.tables.basic-tables', ['title' => 'Basic Tables']);
})->name('basic-tables');

// pages

Route::get('/blank', function () {
    return view('pages.blank', ['title' => 'Blank']);
})->name('blank');

// error pages
Route::get('/error-404', function () {
    return view('pages.errors.error-404', ['title' => 'Error 404']);
})->name('error-404');

// chart pages
Route::get('/line-chart', function () {
    return view('pages.chart.line-chart', ['title' => 'Line Chart']);
})->name('line-chart');

Route::get('/bar-chart', function () {
    return view('pages.chart.bar-chart', ['title' => 'Bar Chart']);
})->name('bar-chart');


// authentication pages
Route::get('/login', function () {
    return view('auth.login', ['title' => 'Login']);
})->name('login');

Route::get('/register', function () {
    return view('auth.register', ['title' => 'Register']);
})->name('register');

// ui elements pages
Route::get('/alerts', function () {
    return view('pages.ui-elements.alerts', ['title' => 'Alerts']);
})->name('alerts');

Route::get('/avatars', function () {
    return view('pages.ui-elements.avatars', ['title' => 'Avatars']);
})->name('avatars');

Route::get('/badge', function () {
    return view('pages.ui-elements.badges', ['title' => 'Badges']);
})->name('badges');

Route::get('/buttons', function () {
    return view('pages.ui-elements.buttons', ['title' => 'Buttons']);
})->name('buttons');

Route::get('/image', function () {
    return view('pages.ui-elements.images', ['title' => 'Images']);
})->name('images');

Route::get('/videos', function () {
    return view('pages.ui-elements.videos', ['title' => 'Videos']);
})->name('videos');


// Masyarakat
Route::get('/dashboard_masyarakat', [DashboardController::class, 'index'])->name('dashboard_masyarakat.user');

// menyimpan data pengaduan Masyarakat
Route::post('/form_pengaduan', [ComplaintController::class, 'store'])->name('create.store');

// tampil data pengaduan Masyarakat
Route::get('/user_pengaduan', [ComplaintController::class, 'index'])->name('pengaduan.index');

// Form input pengaduan Masyarakat
Route::get('/form_pengaduan', [ComplaintController::class, 'form'])->name('create.form');

// Menampilkan form yang sudah ada untuk diedit
Route::get('/pengaduan/{id}/edit', [ComplaintController::class, 'edit'])->name('pengaduan.edit');

// Proses update data pengaduan
Route::put('/pengaduan/{id}', [ComplaintController::class, 'update'])->name('pengaduan.update');

// Admin
Route::get('/dashboard_admin', function () {
    return view('dashboard.admin', ['title' => 'Dashboard Admin']);
})->name('dashboard.admin');

// tampil data laporan pengaduan admin
Route::get('/admin_pengaduan', [ComplaintController::class, 'index'])->name('admin_pengaduan.index');

// hapus data pengaduan
Route::delete('/pengaduan/{id}', [ComplaintController::class, 'destroy'])->name('pengaduan.destroy');
});

require __DIR__.'/auth.php';
