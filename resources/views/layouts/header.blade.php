<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/21d6846807.js" crossorigin="anonymous"></script>
    <title>{{$pageTitle}}</title>
    <style>
        .bg-grey {
            background-color: #ffffff
            }

        .active {
            color:#00a2b1 !important;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light border-bottom">
        <div class="container-fluid">
            <a class="mx-5" href="{{route('home')}}">
                <img src="{{ asset('storage/BTZ-Transportes.png')}}" height="65" width="203"/>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-5" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item mx-1">
                    <a
                        class="{{"nav-link " . (request()->is('drivers') ? 'active' : '')}}"
                        href="{{route('drivers')}}">
                        <i class="fas fa-id-card"></i> Motoristas
                    </a>
                  </li>
                  <li class="nav-item mx-1">
                    <a
                        class="{{"nav-link " . (request()->is('vehicles') ? 'active' : '')}}"
                        href="{{route('vehicles')}}">
                        <i class="fas fa-car-side"></i> Veículos
                    </a>
                  </li>
                  <li class="nav-item mx-1">
                    <a
                        class="{{"nav-link " . (request()->is('refuels') ? 'active' : '')}}"
                        href="{{route('refuels')}}">
                        <i class="fas fa-gas-pump"></i> Abastecimentos
                    </a>
                  </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item mx-1">
                        <a
                            class="nav-link"
                            href="{{route('login')}}">
                            <i class="fas fa-power-off"></i> Sair
                        </a>
                      </li>
                    </ul>
              </div>
        </div>
    </nav>
<div class="container d-flex flex-grow-1">
