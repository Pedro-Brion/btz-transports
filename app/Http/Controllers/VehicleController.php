<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
        $pageTitle = "Veículos";

        return view('vehicles.index', ['pageTitle' => $pageTitle]);
    }
}
