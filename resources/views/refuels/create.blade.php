@extends('layouts.app')

@section('content')

    <div class="w-100">
        <div class="container d-flex justify-content-between my-3 p-1">
            <h2>Adicionar abastecimento:</h2>
        </div>
        <form action="/refuels" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Motorista:</label>
                        <select required class="form-select align-self-center" name="driver_id">
                            @foreach ($drivers as $driver)
                            <option selected value="{{$driver->id}}">{{$driver->name}}</option>
                            @endforeach
                    </select>
                </div>
                <div class="col">
                    <label class="form-label">Veículo:</label>
                    <select required class="form-select align-self-center" name="vehicle_id">
                        @foreach ($vehicles as $vehicle)
                        <option selected value="{{$vehicle->id}}">{{$vehicle->name}}</option>
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
                    <select required class="form-select align-self-center" name="type_fuel" id="fuel">
                        <option selected value="Gasolina">Gasolina</option>
                        <option value="Etanol">Etanol</option>
                        <option value="Diesel">Diesel</option>
                      </select>
                </div>
                <div class="col">
                    <label class="form-label">Valor Abastecido:</label>
                    <input  id="value" required type="number" class="form-control" min="0" max="" step=".1" name="refuel_amount" />
                </div>
                <div class="col">
                    <label class="form-label">Preço:</label>
                    <input
                        readonly
                        type="text"
                        class="form-control"
                        name="price"
                        id="price"
                        />
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
                    price.value="R$" + value.value*4.29;
                if(fuel.value ==="Etanol")
                    price.value="R$"+ value.value*2.99;
                if(fuel.value ==="Diesel")
                    price.value= "R$"+value.value*2.09;
            }
        })
        value.addEventListener('change', (e)=>{

                if(fuel.value ==="Gasolina")
                    price.value="R$" + value.value*4.29;
                if(fuel.value ==="Etanol")
                    price.value="R$"+ value.value*2.99;
                if(fuel.value ==="Diesel")
                    price.value= "R$"+value.value*2.09;

        })

        
    </script>

@endsection
