@extends('layouts.app')

@section('content')

    <div class="w-100">
        <div class="container d-flex justify-content-between my-3 p-1">
            <h2>Adicionar novo veículo:</h2>
        </div>
        <form action="/vehicles/{{$vehicle->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Nome:</label>
                    <input
                        required
                        type="text"
                        class="form-control"
                        name="name"
                        value="{{$vehicle->name}}"
                        >
                </div>
                <div class="col">
                    <label class="form-label">Fabricante</label>
                    <input
                        required
                        type="text"
                        class="form-control"
                        name="brand"
                        value="{{$vehicle->brand}}"
                        >
                </div>
                <div class="col">
                    <label class="form-label">Ano:</label>
                    <input
                        required
                        type="number"
                         class="form-control"
                         min="1900"
                         max="2021"
                         step="1"
                         value="{{$vehicle->year}}"
                         name="year" />
                </div>
                <div class="col">
                    <label class="form-label">Placa:</label>
                    <input
                        required
                        type="text"
                        class="form-control"
                        name="placa"
                        value="{{$vehicle->placa}}"
                        >
                </div>
            </div>
            <div class="row mb-3 d-flex">
                <div class="col">
                    <label class="form-label">Capacidade do tanque</label>
                    <input
                        required
                        type="number"
                        class="form-control"
                         min="00"
                         max="200"
                         step="1"
                         name="tank"
                         value="{{$vehicle->tank}}"
                         >
                </div>
                <div class="col">
                    <label class="form-label">Tipo de Combustível:</label>
                    <select
                        required
                        class="form-select align-self-center"
                        name="type_fuel"
                        value="{{$vehicle->type_fuel}}"
                    >
                        <option
                            {{$vehicle->type_fuel =="Gasolina" ? "selected" :''}} value="Gasolina">Gasolina</option>
                            <option
                            {{$vehicle->type_fuel =="Etanol" ? "selected" :''}} value="Etanol">Etanol</option>
                            <option
                            {{$vehicle->type_fuel =="Diesel" ? "selected" :''}} value="Diesel">Diesel</option>
                      </select>
                </div>
            </div>
            <div class="row mb-3 d-flex">
                <div class="col">
                    <label class="form-label">Observações:</label>
                    <input
                        type="text"
                        class="form-control"
                        name="observation"
                        value="{{$vehicle->observation}}"
                        >
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>

@endsection
