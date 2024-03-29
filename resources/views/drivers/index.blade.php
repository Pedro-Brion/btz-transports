@extends('layouts.app')

@section('content')

    <div class="w-100">
        <div class="container d-flex justify-content-between my-3 p-1">
            <h1>Motoristas</h1>
            <button type="button" onclick="window.location.href='/drivers/create'" class="btn rounded btn-primary"> Adicionar</button>
        </div>
        @foreach ($drivers as $driver)
        <button class="border-0 bg-transparent w-100" type="button" data-bs-toggle="modal" data-bs-target="#options{{$driver->id}}">
            <div class="card w-100">
                <div class="d-flex justify-content-around card-body">
                    <div class="px-2 text-center w-25">
                        <h4>Nome:</h4>
                        <p>{{$driver->name}}<p>
                    </div>
                    <div class="mx-2 px-2 text-center">
                        <h4>CPF:</h4>
                        <p>{{$driver->cpf}}<p>
                    </div>
                    <div class="mx-2 px-2 text-center">
                        <h4>CNH:</h4>
                        <p>{{$driver->cnh}} - {{$driver->cat_cnh}}<p>
                    </div>
                    <div class="mx-2 px-2 text-center">
                        <h4>Nascimento:</h4>
                        <p>{{$driver->birth}}<p>
                    </div>
                    <div class="mx-2 px-2 text-center">
                        <h4>Ativo:</h4>
                        @if ($driver->active)
                        <i class="fas fa-check"></i>
                        @else
                        <i class="fas fa-times"></i>
                        @endif
                    </div>
                </div>
            </div>
        </button>

            <!-- Modal -->
            <div class="modal fade" id="options{{$driver->id}}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Opções</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <p>{{$driver->name}}</p>
                            <button
                                type="button"
                                class="btn btn-primary"
                                onclick="window.location.href='/drivers/{{$driver->id}}/edit'">
                                Editar
                            </button>
                            <form
                                action="/drivers/{{$driver->id}}" method="POST"
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
