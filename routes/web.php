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

Route::get('/', function(){
    return redirect('/login');
});

////Login
Auth::routes();

////Drivers
Route::resource('/drivers', DriversController::class);

////Users
Route::get('home', [PagesController::class,'index']);

////Refuels
Route::resource('/refuels', RefuelsController::class);

////Vehicles
Route::resource('/vehicles', VehiclesController::class);
