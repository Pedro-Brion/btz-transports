<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RefuelController extends Controller
{
    public function index()
    {
        $pageTitle = "Reabastecimentos";

        return view('refuel.index', ['pageTitle' => $pageTitle]);
    }
}
