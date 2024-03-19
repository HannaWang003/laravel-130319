<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController;
use Faker\Guesser\Name;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello.hello');
});

Route::get('/cat33', [CatController::class, 'cat'])->name('good');
