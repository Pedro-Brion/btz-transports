@extends('layouts.app')

@section('content')

    <div class="w-100">
        <div class="container d-flex justify-content-between my-3 p-1">
            <h2>Adicionar novo veículo:</h2>
        </div>
        <form action="/vehicles" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Nome:</label>
                    <input required type="text" class="form-control" name="name">
                </div>
                <div class="col">
                    <label class="form-label">Fabricante</label>
                    <input required type="text" class="form-control" name="brand">
                </div>
                <div class="col">
                    <label class="form-label">Ano:</label>
                    <input required type="number" class="form-control" min="1900" max="2021" step="1" value="2021" name="year" />
                </div>
                <div class="col">
                    <label class="form-label">Placa:</label>
                    <input required type="text" class="form-control" name="placa">
                </div>
            </div>
            <div class="row mb-3 d-flex">
                <div class="col">
                    <label class="form-label">Capacidade do tanque</label>
                    <input required type="number" class="form-control" min="00" max="200" step="1" name="tank">
                </div>
                <div class="col">
                    <label class="form-label">Tipo de Combustível:</label>
                    <select required class="form-select align-self-center" name="type_fuel">
                        <option selected value="Gasolina">Gasolina</option>
                        <option value="Etanol">Etanol</option>
                        <option value="Diesel">Diesel</option>
                      </select>
                </div>
            </div>
            <div class="row mb-3 d-flex">
                <div class="col">
                    <label class="form-label">Observações:</label>
                    <input type="text" class="form-control" name="observation">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>

@endsection
