@extends('layouts.app')

@section('content')

    <div class="w-100">
        <div class="container d-flex justify-content-between my-3 p-1">
            <h1>Abastecimentos</h1>
            <button type="button" onclick="window.location.href='/refuels/create'" class="btn rounded btn-primary"> Adicionar</button>
        </div>
        @foreach ($refuels as $refuel)
        <button class="border-0 bg-transparent w-100" type="button" data-bs-toggle="modal" data-bs-target="#options{{$refuel->id}}">
            <div class="card w-100">
                <div class="d-flex justify-content-around card-body">
                    <div class="px-2 text-center w-25">
                        <h4>Veículo:</h4>
                        <p>{{$refuel->vehicle['name']}}<p>
                    </div>
                    <div class="mx-2 px-2 text-center">
                        <h4>Motorista:</h4>
                        <p>{{$refuel->driver['name']}}<p>
                    </div>
                    <div class="mx-2 px-2 text-center">
                        <h4>Data:</h4>
                        <p>{{$refuel->date->format('d/m/Y')}}<p>
                    </div>
                    <div class="mx-2 px-2 text-center">
                        <h4>Combustível:</h4>
                        <p>{{$refuel->type_fuel}}<p>
                    </div>
                    <div class="mx-2 px-2 text-center">
                        <h4>Quantidade:</h4>
                        <p>{{$refuel->refuel_amount}} L<p>
                    </div>
                    <div class="mx-2 px-2 text-center">
                        <h4>Valor:</h4>
                        <p>{{$refuel->price}}<p>
                    </div>
                </div>
            </div>
        </button>

            <!-- Modal -->
            <div class="modal fade" id="options{{$refuel->id}}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Opções</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <p>{{$refuel->name}}</p>
                            <button
                                type="button"
                                class="btn btn-primary"
                                onclick="window.location.href='/refuels/{{$refuel->id}}/edit'">
                                Editar
                            </button>
                            <form
                                action="/refuels/{{$refuel->id}}" method="POST"
                            >
                                @csrf
                                @method('delete')
                            <button
                                type="submit" class="btn btn-danger">
                                Deletar
                            </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>



@endsection
