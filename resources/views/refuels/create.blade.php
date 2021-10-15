@extends('layouts.app')

@section('content')

    <div class="w-100">
        <div class="container d-flex justify-content-between my-3 p-1">
            <h2>Adicionar novo motorista:</h2>
        </div>
        <form action="/drivers" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Motorista:</label>
                        <select required class="form-select align-self-center" name="cat_cnh">
                            @foreach ($drivers as $driver)
                            <option selected value="{{$driver->name}}">{{$driver->name}}</option>
                            @endforeach
                    </select>
                </div>
                <div class="col">
                    <label class="form-label">Veículo:</label>
                    <select required class="form-select align-self-center" name="cat_cnh">
                        @foreach ($vehicles as $vehicle)
                        <option selected value="{{$vehicle->name}}">{{$vehicle->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-3 d-flex">
                <div class="col">
                    <label class="form-label">Data:</label>
                    <input
                        required
                        type="date"
                        class="form-control"
                        max="2021-01-01"
                        name="date"
                        >
                </div>
                <div class="col">
                    <label class="form-label">Combustível:</label>
                    <select required class="form-select align-self-center" name="type_fuel">
                        <option selected value="Gasolina">Gasolina</option>
                        <option value="Etanol">Etanol</option>
                        <option value="Diesel">Diesel</option>
                      </select>
                </div>
                <div class="col">
                    <label class="form-label">Valor Abastecido:</label>
                    <input required type="number" class="form-control" min="0" max="200" step=".1" name="refuel_amount" />
                </div>
                <div class="col">
                    <label class="form-label">Preço:</label>
                    <input disabled type="number" class="form-control" min="0" max="200"
                     name="refuel_amount"
                     value="{{00}}" />
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>

@endsection
