<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/profile/edit", [ProfileController::class, "edit"])->name("profile.edit");

Route::put("/profile", [ProfileController::class, "update"])->name("profile.update");

Route::get("/posts/create", [PostController::class, "create"])->name("posts.create");

Route::post("/posts", [PostController::class, "store"])->name("posts.store");
