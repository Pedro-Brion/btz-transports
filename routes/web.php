<?php


use Illuminate\Support\Facades\Route;

//CONTROLLERS
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DriversController;
use App\Http\Controllers\RefuelController;
use App\Http\Controllers\VehicleController;

//ROUTES
////Login
Route::get('/', [PagesController::class, 'login'])->name("login");

////Home
Route::get('/home', [PagesController::class, 'index'])->name("home");

////Drivers
Route::get('/drivers', [DriversController::class, 'index'])->name("drivers");

////Users
Route::get('/users', [UsersController::class, 'index'])->name("users");
Route::get('/users/{id}', [UsersController::class, 'show'])->whereNumber('id');

////Refuels
Route::get('/refuels', [RefuelController::class, 'index'])->name('refuels');

////Vehicles
Route::get('/vehicles', [VehicleController::class, 'index'])->name("vehicles");
