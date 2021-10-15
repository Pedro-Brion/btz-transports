<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function index()
    {
        $pageTitle = "BTZ Transports";
        return view('home2', ['pageTitle' => $pageTitle]);
    }
}
