<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('register', function (){
   return view('register');
});

Route::get('login', function (){
   return view('login');
});

Route::get('spinner', function(){
    return view('spinner');
});

Route::get('allMovie', [\App\Http\Controllers\ClientController::class, 'allMovie']);
Route::get('movieDetails', [\App\Http\Controllers\ClientController::class, 'movieDetails']);
Route::get('moviesOfCategory', [\App\Http\Controllers\ClientController::class, 'moviesOfCategory']);
Route::get('ticket', [\App\Http\Controllers\ClientController::class, 'ticket']);
Route::get('home', [\App\Http\Controllers\ClientController::class, 'home']);





Route::get('dashboard', [\App\Http\Controllers\AdminController::class, 'dashboard']);
Route::get('users', [\App\Http\Controllers\AdminController::class, 'users']);
Route::get('cinemas', [\App\Http\Controllers\AdminController::class, 'cinemas']);
Route::get('movies', [\App\Http\Controllers\AdminController::class, 'movies']);
Route::get('categories', [\App\Http\Controllers\AdminController::class, 'categories']);





Route::get('addMovies', [\App\Http\Controllers\FilmmakerController::class, 'addMovie']);
