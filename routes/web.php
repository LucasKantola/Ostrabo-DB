<?php

use App\Http\Controllers\searchController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/', [HomeController::class, 'search'])->name('home.search');

Route::get('/search', [searchController::class, 'search'])->name('search');

ROUTE::get('/show', [ViewController::class, 'index'])->name('show');

Route::get("/browse", function(){
    return view("browse");
});

Route::get("/add", function(){
    return view("add");
});