<?php

use App\Http\Controllers\searchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/search', [searchController::class, 'index'])->name('search');
Route::post('/search', [searchController::class, 'search'])->name('search');

Route::get("/browse", function(){
    return view("browse");
});

Route::get("/viewer", function(){
    return view("viewer");
});

Route::get("/add", function(){
    return view("add");
});