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

Route::post('/filmmakers/register', [\App\Http\Controllers\RegisterController::class, 'filmmakerStore'])->name('filmmakers.store');
Route::post('/clients/register', [\App\Http\Controllers\RegisterController::class, 'clientStore'])->name('clients.store');



Route::get('allMovie', [\App\Http\Controllers\ClientController::class, 'allMovie']);
Route::get('movieDetails', [\App\Http\Controllers\ClientController::class, 'movieDetails']);
Route::get('moviesOfCategory', [\App\Http\Controllers\ClientController::class, 'moviesOfCategory']);
Route::get('ticket', [\App\Http\Controllers\ClientController::class, 'ticket']);
Route::get('home', [\App\Http\Controllers\ClientController::class, 'home']);





Route::get('dashboard', [\App\Http\Controllers\AdminController::class, 'dashboard']);
Route::get('/getUserCount', [\App\Http\Controllers\AdminController::class, 'getUserCount'])->name('getUserCount');
Route::get('getLatestUsers', [\App\Http\Controllers\AdminController::class, 'getLatestUsers'])->name('getLatestUsers');
Route::get('getLatestCinemas', [\App\Http\Controllers\AdminController::class, 'getLatestCinemas'])->name('getLatestCinemas');



Route::get('users', [\App\Http\Controllers\AdminController::class, 'users']);
Route::get('getAllUsers', [\App\Http\Controllers\AdminController::class, 'getAllUsers'])->name('getAllUsers');



Route::get('movies', [\App\Http\Controllers\AdminController::class, 'movies']);

Route::post('cinemaStore', [\App\Http\Controllers\AdminController::class, 'cinemaStore'])->name('cinemaStore');
Route::get('cinemas', [\App\Http\Controllers\AdminController::class, 'cinemas'])->name('cinemas');
Route::get('getAllCinemas', [\App\Http\Controllers\AdminController::class, 'getAllCinemas'])->name('getAllCinemas');
Route::delete('/cinemas/{cinema}', [\App\Http\Controllers\AdminController::class, 'deleteCinema'])->name('deleteCinema');



Route::post('categoryStore', [\App\Http\Controllers\AdminController::class, 'categoryStore'])->name('categoryStore');
Route::get('categories', [\App\Http\Controllers\AdminController::class, 'categories'])->name('categories');
Route::get('getAllCategories', [\App\Http\Controllers\AdminController::class, 'getAllCategories'])->name('getAllCategories');
Route::delete('/categories/{category}', [\App\Http\Controllers\AdminController::class, 'deleteCategory'])->name('categories.delete');





Route::get('addMovies', [\App\Http\Controllers\FilmmakerController::class, 'addMovie']);
