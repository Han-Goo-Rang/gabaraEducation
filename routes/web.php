<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', HomeController::class)->name('home');

Route::get('/matapelajaran', [PostController::class, 'index'])->name('posts.index');

Route::get('/matapelajaran/{post:slug}', [PostController::class, 'show'])->name('posts.show');

Route::get('/berita', [NewsController::class, 'index'])->name('news.index');

Route::get('/berita/{news:slug}', [NewsController::class, 'show'])->name('news.show');

Route::view('/kontak', 'kontak')->name('kontak');

Route::view('/tentangGabara', 'tentangGabara')->name('tentangGabara');

Route::view('/programKomunitas', 'programKomunitas')->name('programKomunitas');




Route::view('/testimoni', 'testimoni')->name('testimoni');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
