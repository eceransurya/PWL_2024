<?php

use App\Http\Controllers\WelcomeController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/baru', function () {
    return view('baru', ['name'=>'habib']);
});

Route::get('/world', function () {
    return 'world';
});

Route::get('/about', function () {
    return 'Nim : 23552021032 <br> Nama : Ahmad Hamdan Habibulloh'  ;
    
});

Route::get('mahasiswa', function ($id) {
});
Route::put('mahasiswa', function ($id) {
});
Route::delete('mahasiswa', function ($id) {
});
Route::get('mahasiswa/{id}', function ($id) {
});
Route::put('mahasiswa/{id}', function ($id) {
});
Route::delete('mahasiswa{id}', function ($id) {
});

