<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriversController extends Controller
{
    public function index() {
        $pageTitle="Motoristas";
        return view('drivers.index',['pageTitle' => $pageTitle]);
    }
}
