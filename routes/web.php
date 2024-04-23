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
Route::post('login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login.submit');


Route::middleware(['role:client'])->group(function () {
    Route::get('allMovie', [\App\Http\Controllers\ClientController::class, 'allMovie']);
    Route::get('getAllMovies', [\App\Http\Controllers\ClientController::class, 'getAllMovies'])->name('getAllMovies');
    Route::get('movieDetails', [\App\Http\Controllers\ClientController::class, 'movieDetails']);
    Route::post('/reservation/{movie}', [\App\Http\Controllers\ReservationController::class, 'storeReservation'])->name('addReservation');
    Route::get('moviesOfCategory', [\App\Http\Controllers\ClientController::class, 'moviesOfCategory']);
    Route::get('ticket', [\App\Http\Controllers\ClientController::class, 'ticket']);
    Route::get('home', [\App\Http\Controllers\ClientController::class, 'home']);
});


Route::middleware(['role:admin'])->group(function () {
    Route::get('dashboard', [\App\Http\Controllers\AdminController::class, 'dashboard']);
    Route::get('/getUserCount', [\App\Http\Controllers\AdminController::class, 'getUserCount'])->name('getUserCount');
    Route::get('/getCinemaCount', [\App\Http\Controllers\AdminController::class, 'getCinemaCount'])->name('getCinemaCount');
    Route::get('/getCategoryCount', [\App\Http\Controllers\AdminController::class, 'getCategoryCount'])->name('getCategoryCount');
    Route::get('/getMovieCount', [\App\Http\Controllers\AdminController::class, 'getMovieCount'])->name('getMovieCount');

    Route::get('getLatestUsers', [\App\Http\Controllers\AdminController::class, 'getLatestUsers'])->name('getLatestUsers');
    Route::get('getLatestCinemas', [\App\Http\Controllers\AdminController::class, 'getLatestCinemas'])->name('getLatestCinemas');
    Route::get('getLatestCategories', [\App\Http\Controllers\AdminController::class, 'getLatestCategories'])->name('getLatestCategories');
    Route::get('getLatestMovie', [\App\Http\Controllers\AdminController::class, 'getLatestMovies'])->name('getLatestMovies');

    Route::get('users', [\App\Http\Controllers\AdminController::class, 'users']);
    Route::get('getAllUsers', [\App\Http\Controllers\AdminController::class, 'getAllUsers'])->name('getAllUsers');

    Route::get('movies', [\App\Http\Controllers\AdminController::class, 'movies']);

    Route::get('rooms', [\App\Http\Controllers\AdminController::class, 'rooms'])->name('rooms');
    Route::post('roomStore', [\App\Http\Controllers\RoomController::class, 'store'])->name('roomStore');
    Route::get('getAllRooms', [\App\Http\Controllers\RoomController::class, 'getAllRooms'])->name('getAllRooms');
    Route::delete('/rooms/{room}', [\App\Http\Controllers\RoomController::class, 'deleteRoom'])->name('rooms.delete');

    Route::get('cinemas', [\App\Http\Controllers\AdminController::class, 'cinemas'])->name('cinemas');
    Route::post('cinemaStore', [\App\Http\Controllers\CinemaController::class, 'cinemaStore'])->name('cinemaStore');
    Route::get('getAllCinemas', [\App\Http\Controllers\CinemaController::class, 'getAllCinemas'])->name('getAllCinemas');
    Route::delete('/cinemas/{cinema}', [\App\Http\Controllers\CinemaController::class, 'deleteCinema'])->name('deleteCinema');

    Route::get('categories', [\App\Http\Controllers\AdminController::class, 'categories'])->name('categories');
    Route::post('categoryStore', [\App\Http\Controllers\CategoryController::class, 'categoryStore'])->name('categoryStore');
    Route::get('getAllCategories', [\App\Http\Controllers\CategoryController::class, 'getAllCategories'])->name('getAllCategories');
    Route::delete('/categories/{category}', [\App\Http\Controllers\CategoryController::class, 'deleteCategory'])->name('categories.delete');
});


Route::middleware(['role:filmmaker'])->group(function () {
    Route::get('addMovies', [\App\Http\Controllers\FilmmakerController::class, 'addMovie']);
    Route::get('formAddMovie', [\App\Http\Controllers\FilmmakerController::class, 'formAddMovie']);
    Route::get('/get-rooms', [\App\Http\Controllers\FilmmakerController::class, 'getRoomsByCinema'])->name('get-rooms');
    Route::post('movies/create', [\App\Http\Controllers\MovieController::class, 'createMovie'])->name('movies.create');
});
