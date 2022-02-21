<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Route::GET('/', fn() => view("home"));
Route::GET("signup", fn() => view("signup"));
Route::POST('signup', [UserController::class, "create"]);

Route::GROUP(["prefix" => "admin"], function() {
    Route::GET("login", fn() => view("adminlogin"));
    Route::POST("login", [AdminController::class, "auth"]);
    Route::GET("dashboard", fn() => view("adminpanel"))->middleware("auth");
    Route::POST("updateUser", [UserController::class, "update"])->middleware("auth");
});