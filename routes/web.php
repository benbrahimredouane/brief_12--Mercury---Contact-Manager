<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ContactController;




Route::resource('groups', GroupController::class);
Route::resource('contacts', ContactController::class);



Route::get('/groups/add', [GroupController::class, 'add'])->name('add');
Route::get('/', [HomeController::class, 'index'])->name('home');

