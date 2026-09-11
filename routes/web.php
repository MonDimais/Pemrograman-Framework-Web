<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return 'Toko Koperasi KOPDES Desa adalah toko yang menyediakan pengalaman belanja seperti dalam video game receh.';
});
