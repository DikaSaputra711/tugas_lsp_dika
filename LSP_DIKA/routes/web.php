<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\auth\RegisteredUserController;
use App\Http\Controllers\UserController;



 

Route::get('/', function () {
    return view('welcome', ["title" => "welcome"]);
});

Route::get('/welcome', function () {
    return view('welcome', ["title" => "welcome"]);
});

Route::get('/about', function () {
    return view('about', ["title" => "home"]);
});


Route::get('/gagal', function () {
    return view('gagal');});

Route::get('/pending', function () {
    return view('pending');});

Route::get('/pendaftaran/notification', function () {
    return view('pendaftaran.notification'); // View notifikasi berada di dalam folder 'pendaftaran'
})->name('notification');


Route::get('/pendaftaran', [PendaftarController::class, 'index'])->name('pendaftaran.index');
Route::get('/pendaftaran/create', [PendaftarController::class, 'create'])->name('pendaftaran.create'); // Tambahkan nama rute
Route::post('/pendaftaran/store', [PendaftarController::class, 'store'])->name('pendaftaran.store');
Route::get('/pendaftaran/{id}', [PendaftarController::class, 'show'])->name('pendaftaran.show');

Route::get('/user', [UserController::class, 'index'])->name('user.index');
// Route::get('/user/', [PendaftarController::class, 'create'])->name('user.create'); // Tambahkan nama rute
// Route::post('/user', [PendaftarController::class, 'store'])->name('user.store');
Route::get('/user/detail/{id}', [UserController::class, 'show'])->name('user.show');

Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index');
Route::get('/pengumuman/create', [PengumumanController::class, 'create'])->name('pengumuman.create');
Route::post('/pengumuman/store', [PengumumanController::class, 'store'])->name('pengumuman.store');
Route::put('/pengumuman/{id}', [PengumumanController::class, 'update'])->name('pengumuman.update');
Route::get('/pengumuman/{id}/edit', [PengumumanController::class, 'edit'])->name('pengumuman.edit');
Route::delete('/pengumuman/{id}', [PengumumanController::class, 'destroy'])->name('pengumuman.destroy');

Route::patch('/user/detail/{id}/admin', [UserController::class, 'validationAdmin'])->name('user.validate_admin');
Route::patch('/pendaftaran/{id}/status', [PendaftarController::class, 'updateStatus'])->name('pendaftaran.updateStatus');

// Login
Route::get('/login', function () {
    return view('auth.login', ["title" => "login"]);
});

// Lainnya
// Route::get('/biaya-perkuliahan', [YourController::class, 'biayaPerkuliahan'])->name('biaya-perkuliahan');
// Route::get('/tutorial', [YourController::class, 'tutorial'])->name('tutorial');
// Route::get('/program-studi', [YourController::class, 'programStudi'])->name('program-studi');
// Route::get('/kontak', [YourController::class, 'kontak'])->name('kontak');
Route::view('/biaya-perkuliahan', 'layouts.biaya')->name('biaya-perkuliahan');
Route::view('/tutorial', 'layouts.tutorial')->name('tutorial');
Route::view('/program-studi', 'layouts.program-studi')->name('program-studi');
Route::view('/kontak', 'layouts.kontak')->name('kontak');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::view('/register', 'auth.register')->name('register');
Route::post('register', [RegisteredUserController::class, 'store']);


Route::get('/pending-notice', function () {
    return "Your account is still pending. Please wait for admin approval.";
})->name('pending-notice');

Route::get('/rejected-notice', function () {
    return "Your account has been rejected. Please contact support for more information.";
})->name('rejected-notice');

Route::get('/admin', function () {
    return view('admin', ["title" => "admin"]);
});

Route::post('/admin/users/{user}/verify', [RegisteredUserController::class, 'verifyUser'])->name('admin.users.verify');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/verify-users', [AdminUserController::class, 'showPendingUsers'])->name('admin.users.pending');
    Route::post('/admin/users/{user}/verify', [AdminUserController::class, 'verifyUser'])->name('admin.users.verify');
});

Route::patch('/user/detail/{id}/admin', [UserController::class, 'validationAdmin'])->name('user.validate_admin');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
