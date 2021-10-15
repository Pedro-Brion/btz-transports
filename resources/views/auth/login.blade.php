<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BTZ Transports</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body class="vh-100">
    <div class="container d-flex justify-content-center align-items-center h-100">
            <div class="card p-2 shadow rounded" style="width: 20rem;">
                <img src="{{ asset('storage/BTZ-Transportes.png')}}" height="80" width="250"/>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">Faça login para iniciar sua seção</h6>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label ">{{ __('Usuário') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Senha') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="showPassword">
                                        <label class="form-check-label" for="exampleCheck1">Mostrar Senha</label>
                                      </div>
                            </div>

                            <div class="mb-3 text-center">

                                    <div class="form-check mx-3">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                            </div>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const checkBox = document.querySelector("#showPassword");
    const passwordInput = document.querySelector("#password");

    checkBox.onchange = () => {
        passwordInput.type= passwordInput.type == "password" ? '' : 'password';
    }
</script>
</body>
</html>
