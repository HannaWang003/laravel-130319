<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController;
use App\Http\Controllers\DogController;
use App\Http\Controllers\FishController;
use App\Http\Controllers\FishsController;
use App\Http\Controllers\CatsController;

Route::get('/', function () {
    return view('welcome', ['name' => 'Hanna']);
});

Route::get('/hello', function () {
    return view('hello.hello');
});

//single
Route::get('/cat33', [CatController::class, 'cat'])->name('good');
Route::get('/dogdog', [DogController::class, 'single_dog']);
Route::get('/fish', [FishController::class, 'water']);

//resource
Route::resource('fishs', FishsController::class);

//cat
Route::resource('cats', CatsController::class);
Route::get('/excel123', [CatsController::class, 'excel'])->name('excel');
