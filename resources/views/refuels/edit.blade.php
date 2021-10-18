@extends('layouts.app')

@section('content')

    <div class="w-100">
        <div class="container d-flex justify-content-between my-3 p-1">
            <h2>Adicionar novo motorista:</h2>
        </div>
        <form action="/refuels/{{$refuel->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Motorista:</label>
                        <select required class="form-select align-self-center" name="driver_id">
                            @foreach ($drivers as $driver)
                            <option {{$refuel->driver['name'] == $driver->name ? "selected" :''}} value="{{$driver->id}}">{{$driver->name}}</option>
                            @endforeach
                    </select>
                </div>
                <div class="col">
                    <label class="form-label">Veículo:</label>
                    <select required class="form-select align-self-center" name="vehicle_id">
                        @foreach ($vehicles as $vehicle)
                        <option {{$refuel->vehicle['name'] == $vehicle->name ? "selected" :''}} value="{{$vehicle->id}}">{{$vehicle->name}}</option>
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
                        value="{{$refuel->date}}"
                        >
                </div>
                <div class="col">
                    <label class="form-label">Combustível:</label>
                    <select required class="form-select align-self-center" name="type_fuel" id="fuel">
                        <option
                            {{$refuel->type_fuel =="Gasolina" ? "selected" :''}} value="Gasolina">Gasolina</option>
                            <option
                            {{$refuel->type_fuel =="Etanol" ? "selected" :''}} value="Etanol">Etanol</option>
                            <option
                            {{$refuel->type_fuel =="Diesel" ? "selected" :''}} value="Diesel">Diesel</option>
                      </select>
                      @if(session('errorType'))
                      <p style="color: red"> {{session('errorType')}}</p>

                      @endif
                </div>
                <div class="col">
                    <label class="form-label">Valor Abastecido:</label>
                    <input
                        required
                        type="number"
                        class="form-control"
                        min="0" max="200" step=".1"
                        name="refuel_amount"
                        value="{{
                        old('refuel_amount') !== null ? old('refuel_amount') : $refuel->refuel_amount;
                        }}"
                        id="value"
                        />
                    @if(session('errorTank'))
                    <p style="color: red"> {{session('errorTank')}}</p>

                    @endif
                </div>
                <div class="col">
                    <label class="form-label">Preço:</label>
                    <input readonly type="text" class="form-control"
                     name="price"
                     id="price"
                     value="{{
                        old('price') !== null ? old('price') : $refuel->price;
                        }}"/>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>

    <script>
        const fuel= document.querySelector("#fuel");
        const value= document.querySelector("#value");
        const price= document.querySelector("#price");

        fuel.addEventListener('change', (e)=>{
            if (value.value){
                if(fuel.value ==="Gasolina")
                    price.value="R$" + (value.value*4.29).toFixed(2);
                if(fuel.value ==="Etanol")
                    price.value="R$" + (value.value*2.99).toFixed(2);
                if(fuel.value ==="Diesel")
                    price.value="R$" + (value.value*2.09).toFixed(2);
            }
        })
        value.addEventListener('change', (e)=>{
                if(fuel.value ==="Gasolina")
                    price.value="R$" + (value.value*4.29).toFixed(2);
                if(fuel.value ==="Etanol")
                    price.value="R$" + (value.value*2.99).toFixed(2);
                if(fuel.value ==="Diesel")
                    price.value="R$" + (value.value*2.09).toFixed(2);
        })
    </script>

@endsection
