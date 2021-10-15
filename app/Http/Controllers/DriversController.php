<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;
use Carbon\Carbon;

class DriversController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageTitle = "Motoristas";

        $drivers = Driver::all();


        return view('drivers.index', ['pageTitle' => $pageTitle, 'drivers' => $drivers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pageTitle = "Motoristas | Criar";

        return view('drivers.create', ['pageTitle' => $pageTitle]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $active= $request->input('active') ==="on";

        $driver = Driver::create([
            'name' => $request->input('name'),
            'cpf' => $request->input('cpf'),
            'cnh' => $request->input('cnh'),
            'cat_cnh' => $request->has('cat_cnh'),
            'birth' => $request->input('birth'),
            'active' => $active,
        ]);

        return redirect('/drivers');
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
        $driver = Driver::where('id',$id)->first();

        $pageTitle = "Motoristas | Editar";

        return view('drivers.edit',[
            'pageTitle'=>$pageTitle ,
            'driver'=>$driver
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
        $active= $request->input('active') ==="on";

        $driver = Driver::where('id',$id)
            ->update([
            'name' => $request->input('name'),
            'cpf' => $request->input('cpf'),
            'cnh' => $request->input('cnh'),
            'cat_cnh' => $request->has('cat_cnh'),
            'birth' => $request->input('birth'),
            'active' => $active,
        ]);

        return redirect('/drivers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $driver = Driver::where('id',$id)->first();

        $driver->delete();

        return redirect('/drivers');
    }
}
