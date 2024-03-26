<?php

use App\Http\Controllers\searchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/', [HomeController::class, 'search'])->name('home.search');

Route::get('/search', [searchController::class, 'search'])->name('search');

Route::get("/show", function(){
    return view("show");
})->name("show");

Route::get("/browse", function(){
    return view("browse");
});

Route::get("/add", function(){
    return view("add");
});