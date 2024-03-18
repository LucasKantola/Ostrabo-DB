<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get("/browse", function(){
    return view("browse");
});

Route::get("/viewer", function(){
    return view("viewer");
});