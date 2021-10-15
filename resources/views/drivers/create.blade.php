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
                    <label class="form-label">Nome:</label>
                    <input required type="text" class="form-control" name="name">
                </div>
                <div class="col">
                    <label class="form-label">CPF:</label>
                    <input required type="text" class="form-control" name="cpf">
                </div>
            </div>
            <div class="row mb-3 d-flex">
                <div class="col">
                    <label class="form-label">CNH:</label>
                    <input required type="text" class="form-control" name="cnh">
                </div>
                <div class="col">
                    <label class="form-label">Categoria:</label>
                    <select required class="form-select align-self-center" name="cat_cnh">
                        <option selected value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                      </select>
                </div>
                <div class="col">
                    <label class="form-label">Data de Nascimento:</label>
                    <input required type="date" class="form-control" max="2021-01-01" name="birth">
                </div>
                <div class="row mt-3">
                    <div class="form-check  text-center">
                        <input name="active" class="form-check-input" type="checkbox">
                        <label class="form-check-label">
                            Ativo
                        </label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>

@endsection
