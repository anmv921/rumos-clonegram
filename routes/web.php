<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/profile/edit", [ProfileController::class, "edit"])->name("profile.edit");

Route::put("/profile", [ProfileController::class, "update"])->name("profile.update");