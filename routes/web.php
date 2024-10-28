<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ActionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\PengumumanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AppController::class, 'index']);

Route::get('/berita', [AppController::class, 'berita']);

Route::get('/detail/{slug}', [AppController::class, 'detail']);

Route::get('/informasi', [AppController::class, 'informasi']);

Route::get('/tulisan/{slug}', [AppController::class, 'tulisan']);


Route::get('/galeri', function () {
    return view('galeri');
});



Route::get('/foto', function () {
    return view('foto.foto');
});

Route::get('/gallery', function () {
    return view('foto.foto');
});

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');




Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/blog', [BlogController::class, 'index'])->name('blog')->middleware('auth');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create')->middleware('auth');
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store')->middleware('auth');
Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit')->middleware('auth');
Route::post('/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update')->middleware('auth');
Route::post('/blog/destroy/{id}', [BlogController::class, 'destroy'])->name('blog.destroy')->middleware('auth');

Route::get('/photo', [PhotoController::class, 'index'])->name('photo')->middleware('auth');
Route::post('/photo/store', [PhotoController::class, 'store'])->name('photo.store')->middleware('auth');
Route::post('/photo/update/{id}', [PhotoController::class, 'update'])->name('photo.update')->middleware('auth');
Route::post('/photo/destroy/{id}', [PhotoController::class, 'destroy'])->name('photo.destroy')->middleware('auth');



Route::get('/video', [VideoController::class, 'index'])->name('video')->middleware('auth');
Route::post('/video/store', [VideoController::class, 'store'])->name('video.store')->middleware('auth');
Route::post('/video/update/{id}', [VideoController::class, 'update'])->name('video.update')->middleware('auth');
Route::post('/video/destroy/{id}', [VideoController::class, 'destroy'])->name('video.destroy')->middleware('auth');


Route::get('/action1', [ActionController::class, 'action1'])->name('action1');
Route::get('/action2', [ActionController::class, 'action2'])->name('action2');
Route::get('/action3', [ActionController::class, 'action3'])->name('action3');

Route::get('/jurusan', [LinkController::class, 'jurusan'])->name('jurusan');
Route::get('/ekskul', [LinkController::class, 'ekskul'])->name('ekskul');
Route::get('/prestasi', [LinkController::class, 'prestasi'])->name('prestasi');





Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman')->middleware('auth');
Route::get('/pengumuman/create', [PengumumanController::class, 'create'])->name('pengumuman.create')->middleware('auth');
Route::post('/pengumuman/store', [PengumumanController::class, 'store'])->name('pengumuman.store')->middleware('auth');
Route::get('/pengumuman/edit/{id}', [PengumumanController::class, 'edit'])->name('pengumuman.edit')->middleware('auth');
Route::post('/pengumuman/update/{id}', [PengumumanController::class, 'update'])->name('pengumuman.update')->middleware('auth');
Route::post('/pengumuman/destroy/{id}', [PengumumanController::class, 'destroy'])->name('pengumuman.destroy')->middleware('auth');

Route::get('/aktifitas', function () {
    return view('halumum');
});





