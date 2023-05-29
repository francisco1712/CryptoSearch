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


Route::view('/', 'home')->name('home');
Route::view('/aboutme', 'aboutme')->name('aboutme');
Route::view('/contact', 'contact')->name('contact');
Route::view('/bitcoin', 'bitcoin')->name('bitcoin');
Route::view('/ethereum', 'ethereum')->name('ethereum');
Route::view('/litecoin', 'litecoin')->name('litecoin');

Route::post('/contact', 'App\Http\Controllers\MessageController@store');

