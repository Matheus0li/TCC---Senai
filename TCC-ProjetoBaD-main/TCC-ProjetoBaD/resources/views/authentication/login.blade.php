<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Entrar</title>
    <link rel="shortcut icon" href="img/folderblue_92960-1.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </head>
  <body id="loginPageBackground">
    <main>
        <form action="/authenticate" method="post">
            @csrf

            <div class="form-group">
                <h1 class="text-center" id="title">Entrar</h1>
                @if(session('msg'))
                    <div class="alert alert-success">{{session('msg')}}</div>
                @endif

                @error('failed')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input id="box-email" name="email" type="email" class="form-control" placeholder="Usuário"><br>
            </div>

            <div class="form-group">
                <input id="box-senha" type="password" name="password" class="form-control" placeholder="Senha"><br>
            </div>

            <div class="form-group">
                <input class="form-check-input" type="checkbox" id="check">
                <label class="form-check-label" for="check">lembre-me</label><br>
            </div><br>

            <div class="form-group">
                <button id="button-enviar" type="submit" name="submit" value="login">Enviar</button>
            </div><br><br>
            
        </form>
            
            <div class="row">
            <div class="col text-center">
                <a href="/cadastro" id="loginAnchor">Registrar-se</a>
            </div>
            <div class="col text-center">
            <a href="/recuperacao" id="loginAnchor">Esqueci minha senha</a>
            </div>
            </div>
    </main>
  </body>
</html>