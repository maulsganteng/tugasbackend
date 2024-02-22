<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\filmcontroller;
use App\Http\Controllers\genrecontroller;
use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//crud film
//form create film
//create
Route::get('/film/create', [filmcontroller::class, 'create']);
//untuk kirim data ke database
Route::post('/film', [filmcontroller::class, 'store']);
//read
//tampil semua data
Route::get('/film', [filmcontroller::class, 'index']);
//Detail film bedasarkan id
Route::get('/film/{film_id}', [filmcontroller::class, 'show']);
//update
//form update film
Route::get('/film/{film_id}/edit', [filmcontroller::class, 'edit']);
//update database berdasarkan id
Route::put('/film/{film_id}', [filmcontroller::class, 'update']);
//delete
//delete berdasarkan id
Route::delete('/film/{film_id}', [filmcontroller::class, 'destroy']);


//crud genre
//form create genre
//create
Route::get('/genre/create', [genrecontroller::class, 'create']);
//untuk kirim data ke database
Route::post('/genre', [genrecontroller::class, 'store']);
//tampil semua data
Route::get('/genre', [genrecontroller::class, 'index']);
//Detail genre bedasarkan id
Route::get('/genre/{genre_id}', [genrecontroller::class, 'show']);
//form update genre
Route::get('/genre/{genre_id}/edit', [genrecontroller::class, 'edit']);
//update database berdasarkan id
Route::put('/genre/{genre_id}', [genrecontroller::class, 'update']);
//delete
//delete berdasarkan id
Route::delete('/genre/{genre_id}', [genrecontroller::class, 'destroy']);
