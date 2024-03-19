<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController;
use App\Http\Controllers\DogController;
use App\Http\Controllers\pigController;
use App\Http\Controllers\FishController;
use App\Http\Controllers\FishsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello.hello');
});

Route::get('/cat33', [CatController::class, 'cat'])->name('good');

Route::get('/dogdog', [DogController::class, 'single_dog']);
Route::resource('pigs', PigController::class);

Route::resource('fishs', FishsController::class);
Route::get('/fish', [FishController::class, 'water']);
