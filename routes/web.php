<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', [
        "name" => "lala",
        "email" => "lala@gmail.com",
        "address" => "Sendowo, Yogyakarta",
        "number" => "123-456-789"
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        'nama' => 'Yodhim',
        'email' => 'Yodhim@example.com',
        'hobi' => 'Makan es krim',
        'umur' => 30,
    ]);
});

Route::get('/boom', [MencobaController::class,'boomesport']);

Route::get('/boom',[PostController::class,'boomesport']);

// Versi 7
Route::get('trying', 'MencobaController@boomesport');

// Versi 9
Route::get('/boom', [MencobaController::class,'boomesport']);
Route::get('/prx', [MencobaController::class,'prxesport']);
Route::get('/fnatic', [MencobaController::class,'fnaticesport']);
Route::get('/fpx', [MencobaController::class,'fpxesport']);
Route::get('/', [MencobaController::class,'beranda']);