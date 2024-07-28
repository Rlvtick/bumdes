<?php

use Illuminate\Support\Facades\Route;

/* Header Nav Bar */

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/visi misi', function () {
    return view('visi-misi');
});

Route::get('/struktur organisasi', function () {
    return view('struktur-org');
});

Route::get('/berita', function () {
    return view('berita-main');
});

Route::get('/sky park hill', function () {
    return view('sph');
});

Route::get('/hippam', function () {
    return view('hippam');
});

Route::get('/pos pendakian', function () {
    return view('pos-pendakian');
});

Route::get('/bank sampah', function () {
    return view('bank-sampah');
});

Route::get('/kontak', function () {
    return view('kontak');
});

/* Sub News Pages */

Route::get('/berita1', function () {
    return view('berita1');
});

Route::get('/berita2', function () {
    return view('berita2');
});

Route::get('/berita3', function () {
    return view('berita3');
});

Route::get('/berita4', function () {
    return view('berita4');
});

Route::get('/berita5', function () {
    return view('berita5');
});

Route::get('/berita6', function () {
    return view('berita6');
});