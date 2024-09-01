<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\User1Controller;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Siswa;
use App\Models\User;
use App\Models\User1;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/coba', function () {
    return view('coba');
});

Route::get('hello', function () {
    return 'ini laravel saya';
});

Route::get('tampil/{nilai}', function ($nilai) {
    return 'nilai saya adalah' .$nilai; 
});

Route::get('tambah/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil penjumlahan adalah '. $nilai1 + $nilai2;
});

Route::get('kurang/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil pengurangan adalah '. $nilai1 - $nilai2;
});

Route::get('kali/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil perkalian adalah '. $nilai1 * $nilai2;
});

Route::get('bagi/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil pembagian adalah'. $nilai1 / $nilai2;
});

// Tugas Praktek Mandiri 1
Route::get('programming-languages', function () {
    $languages = ['php', 'java', 'c', 'javascript', 'dart'];
    $output = '';

    foreach ($languages as $language) {
        $output .= $language . '<br>';
    }

    return $output;
});

Route::get('tabel', function () {
    $barang = ['meja', 'pensil', 'bolpoin', 'lampu', 'kursi'];

    // return view('table', ['data' => $data, 'barang' => $barang2]);
    return view('tabel', compact('barang'));
});

Route::get('template', function () {
    return view('template');
});

Route::get('template_user', function () {
    return view('template_user');
});

// Tugas Praktek Mandiri 2
Route::get('index', function () {
    return view('index');
});

Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});

Route::get('siswa', [SiswaController::class, 'index']);
// Route::get('siswa', [SiswaController::class, 'index']);

// Tugas Praktek Mandiri 4
Route::resource('siswa', SiswaController::class)->middleware(['auth','admin']);

Route::get('post', [PostController::class, 'index']);

Route::resource('post', PostController::class);

Route::get('comment', [CommentController::class, 'index']);

Route::resource('comment', CommentController::class);

Route::get('user1', [User1Controller::class, 'index']);

Route::resource('user1', User1Controller::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('tampilanuser', function () {
    return view('tampilanuser');
});

