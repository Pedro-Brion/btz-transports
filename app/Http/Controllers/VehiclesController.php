<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageTitle = "Veículos";

        $vehicles = Vehicle::all();

        return view('vehicles.index', ['pageTitle' => $pageTitle,'vehicles'=>$vehicles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pageTitle = "Veículos | Criar";

        return view('vehicles.create', ['pageTitle' => $pageTitle]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $year = $request->input('year');
        $date = Carbon::createFromFormat('Y', $year)->format('Y-m-d');

        $vehicle = Vehicle::create([
            'name' => $request->input('name'),
            'placa' => $request->input('placa'),
            'type_fuel' => $request->input('type_fuel'),
            'brand' => $request->input('brand'),
            'year' => $date,
            'tank' => $request->input('tank'),
            'observation'=>$request->input('observation')
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
        $vehicle = Vehicle::where('id',$id)->first();

        $pageTitle = "Veículos | Editar";

        return view('vehicles.edit',[
            'pageTitle'=>$pageTitle ,
            'vehicle'=>$vehicle
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
        $year = $request->input('year');
        $date = Carbon::createFromFormat('Y', $year)->format('Y-m-d');

        $vehicle = Vehicle::where('id',$id)
            ->update([
                'name' => $request->input('name'),
                'placa' => $request->input('placa'),
                'type_fuel' => $request->input('type_fuel'),
                'brand' => $request->input('brand'),
                'year' => $date,
                'tank' => $request->input('tank'),
                'observation'=>$request->input('observation')
        ]);

        return redirect('/vehicles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehicle = Vehicle::where('id',$id)->first();

        $vehicle->delete();

        return redirect('/vehicles');
    }
}
