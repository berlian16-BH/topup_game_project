<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController; // Correct import for GameController

/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/banner', function () {
    return view('banner');
});

Route::get('/menu', function () {
    return view('menu');
});

// routes/web.php
Route::get('/list_game', function () {
    return view('list_game');
});

Route::get('/list_pulsa', function () {
    return view('list_pulsa');
});

Route::get('/list_voucher', function () {
    return view('list_voucher');
});

Route::get('/list_liveapp', function () {
    return view('list_liveapp');
});

Route::get('/list_pln', function () {
    return view('list_pln');
});

Route::get('/Genshin_Impact', function () {
    return view('Genshin_Impact');
});

Route::get('/form_genshin', function () {
    return view('form_genshin');
});

Route::get('/pilih_nominal', function () {
    return view('pilih_nominal');
});
Route::get('/pilih_bayaran', function () {
    return view('pilih_bayaran');
});