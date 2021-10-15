<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Refuel;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class RefuelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageTitle = "Abastecimentos";

        $refuels = Refuel::all();

        return view('refuels.index', ['pageTitle' => $pageTitle, 'refuels' => $refuels]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pageTitle = "Abastecimentos";

        $drivers = Driver::all();
        $vehicles = Vehicle::all();

        return view('refuels.create', ['pageTitle' => $pageTitle, 'drivers' => $drivers, 'vehicles' => $vehicles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehicleID = $request->input('driver_id');
        $validator = Validator::make($request->all(), [
            'refuel_amount' => [
                'required',
                Rule::exists('vehicles', 'tank')->where(function ($query) {
                    return $query->where('id', 5);
                }),
            ],
        ]);

        $price = $request->input('price');
        $refuel = Refuel::create([
            'driver_id' => $request->input('driver_id'),
            'vehicle_id' => $request->input('vehicle_id'),
            'type_fuel' => $request->input('type_fuel'),
            'date' => $request->input('date'),
            'price' => $price,
            'refuel_amount' => $request->input('refuel_amount'),
        ]);

        return redirect('/vehicles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pageTitle = "Abastecimentos";

        $drivers = Driver::all();
        $vehicles = Vehicle::all();

        $refuel = Refuel::where('id', $id)->first();

        return view('refuels.edit', [
            'pageTitle' => $pageTitle, 'drivers' => $drivers,
            'vehicles' => $vehicles,
            'refuel' => $refuel
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $refuel = Refuel::where('id', $id)
            ->update([
                'driver_id' => $request->input('driver_id'),
                'vehicle_id' => $request->input('vehicle_id'),
                'type_fuel' => $request->input('type_fuel'),
                'date' => $request->input('date'),
                'price' => $request->input('price'),
                'refuel_amount' => $request->input('refuel_amount'),
            ]);

        return redirect('/refuels');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $refuel = Refuel::where('id', $id)->first();

        $refuel->delete();

        return redirect('/refuels');
    }
}
