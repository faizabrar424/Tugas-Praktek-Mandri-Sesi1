<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
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


