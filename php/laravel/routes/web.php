<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

// This is the home page of the application
Route::get('/', [IndexController::class, 'home'])->name('home');

// Show the login form
Route::get('/login', [SessionsController::class, 'create'])->name('login');
//// Login the user
Route::post('/login', [SessionsController::class, 'store'])->name('login.store');
//// Logout the user
Route::post('/logout', [SessionsController::class, 'destroy'])->name('logout');
//
//// Show the registration form
Route::get('/register', [UsersController::class, 'create'])->name('register');
//// Register the user
Route::post('/register', [UsersController::class, 'store'])->name('register.store');
//// Show the user profile
Route::get('/users/{id?}', [UsersController::class, 'show'])->name('users.show');

// 使用 resource 路由来定义 RESTful 路由
Route::resource('categories', CategoriesController::class);
//  GET|HEAD   categories .................... categories.index › CategoriesController@index
//  POST       categories .................... categories.store › CategoriesController@store
//  GET|HEAD   categories/create ........... categories.create › CategoriesController@create
//  GET|HEAD   categories/{category} ........... categories.show › CategoriesController@show
//  PUT|PATCH  categories/{category} ....... categories.update › CategoriesController@update
//  DELETE     categories/{category} ..... categories.destroy › CategoriesController@destroy
//  GET|HEAD   categories/{category}/edit ...... categories.edit › CategoriesController@edit

Route::resource('products', ProductsController::class);

Route::get('/test', [\App\Http\Controllers\TestController::class, 'index'])->name('test');

// 2025/05/07
// author 资源路由
Route::resource('authors', AuthorController::class);
// post 资源路由
Route::resource('posts', PostController::class);
// tag 资源路由
Route::resource('tags', TagController::class);
