@extends('layouts.app')

@section('content')

    <div class="w-100">
        <div class="container d-flex justify-content-between my-3 p-1">
            <h1>Veículos</h1>
            <button type="button" onclick="window.location.href='/vehicles/create'" class="btn rounded btn-primary"> Adicionar</button>
        </div>
        @foreach ($vehicles as $vehicle)
        <button class="border-0 bg-transparent w-100" type="button" data-bs-toggle="modal" data-bs-target="#options{{$vehicle->id}}">
            <div class="card w-100">
                <div class="d-flex flex-row justify-content-around card-body">
                    <div class="px-2 text-center w-25">
                        <h4>Nome:</h4>
                        <p>{{$vehicle->name}}<p>
                    </div>
                    <div class="mx-2 px-2 text-center">
                        <h4>Placa:</h4>
                        <p>{{$vehicle->placa}}<p>
                    </div>
                    <div class="mx-2 px-2 text-center">
                        <h4>Fabricante / Ano:</h4>
                        <p>{{$vehicle->brand}} / {{ $vehicle->year->format('Y') }}<p>
                    </div>
                    <div class="mx-2 px-2 text-center">
                        <div class="mx-2 px-2 text-center">
                            <h4>Combustivel / Capacidade:</h4>
                            <p>{{$vehicle->type_fuel}} / {{$vehicle->tank}}<p>
                        </div>
                    </div>
                </div>
            </div>
        </button>

            <!-- Modal -->
            <div class="modal fade" id="options{{$vehicle->id}}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Opções</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <h3>{{$vehicle->name}}</h3>
                            <div class="justify-content-around row">
                                <div class="mx-2 px-2 text-center">
                                    <h5>Observações</h5>
                                    <p>{{$vehicle->observation}}<p>
                                </div>
                            </div>
                            <div class="d-flex flex-row justify-content-center">
                                <button
                                    type="button"
                                    class="btn btn-primary mx-1"
                                    onclick="window.location.href='/vehicles/{{$vehicle->id}}/edit'">
                                    Editar
                                </button>
                                <form
                                    action="/vehicles/{{$vehicle->id}}" method="POST"
                                >
                                    @csrf
                                    @method('delete')
                                <button
                                    type="submit" class="btn btn-danger mx-1">
                                    Deletar
                                </button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>



@endsection
