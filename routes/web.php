<?php


use Illuminate\Support\Facades\Route;

//CONTROLLERS
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DriversController;
use App\Http\Controllers\RefuelsController;
use App\Http\Controllers\VehiclesController;
use Illuminate\Support\Facades\Auth;

//ROUTES


////Login
Route::get('/', [PagesController::class, 'login']);

////Home
Route::get('/home', [PagesController::class, 'index'])->name("home");

////Drivers
Route::resource('/drivers', DriversController::class);

////Users

////Refuels
Route::resource('/refuels', RefuelsController::class);

////Vehicles
Route::resource('/vehicles', VehiclesController::class);
