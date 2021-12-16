<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('layouts.app');
});

// Route Content
Route::get('/dashboard', function () {
    return view('konten.dashboard');
});

// Route Master
// Users
Route::get('/master-admin', function () {
    return view('konten.master.admin');
});
Route::get('/master-trainer', function () {
    return view('konten.master.trainer');
});
Route::get('/master-member', function () {
    return view('konten.master.member');
});

// Artikel
Route::get('/master-artikel', function () {
    return view('konten.master.artikel');
});


