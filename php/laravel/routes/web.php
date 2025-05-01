<?php

use App\Http\Controllers\TestsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', [TestsController::class, 'index'])->name('test.index');
Route::get('/introduce', [TestsController::class, 'introduce'])->name('test.introduce');
