<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BTZ Transports</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        .btn {
            background-color: #00a2b1;
            color: white,
        }
    </style>
</head>
<body class="vh-100">
    <div class="container d-flex justify-content-center align-items-center h-100">
        <div class="card p-2 shadow rounded" style="width: 20rem;">
            <img src="{{ asset('storage/BTZ-Transportes.png')}}" height="80" width="250"/>
            <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted">Faça login para iniciar sua seção</h6>
                <form>
                    <div class="mb-3">
                      <label class="form-label">Usuário</label>
                      <input type="email" class="form-control" id="e-mail">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Senha</label>
                      <input type="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="showPassword">
                      <label class="form-check-label" for="exampleCheck1">Mostrar Senha</label>
                    </div>
                    <div class="m-auto text-center">
                    <button type="submit" class="btn">Submit</button>
                    </div>
                  </form>
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
