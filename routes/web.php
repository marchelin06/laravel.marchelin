<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/beranda');
});

Route::get('/about', function () {
    $biodata = [
        'nama' => 'Marchelin',
        'umur' => '17',
        'alamat' => 'Bangah',
    ];
    return view('pages.about', $biodata);
});

Route::get('/about/{id}', function () {
    return view('pages.detail');
});

Route::view('/contact', 'pages.contact');