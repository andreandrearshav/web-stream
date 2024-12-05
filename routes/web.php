<?php

use App\Http\Controllers\FilmController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get()
Route::resource('films', FilmController::class);