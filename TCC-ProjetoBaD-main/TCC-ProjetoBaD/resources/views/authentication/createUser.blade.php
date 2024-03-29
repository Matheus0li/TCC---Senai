<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<main>
    <form action="/user/store" method="post">
        @csrf
        <div class="form-group">
            <h1 class="text-center" id="title">Cadastro</h1>
            @if(session('msg'))
                <div class="alert alert-danger">{{session('msg')}}</div>
            @endif
            <input id="box-email" type="text" placeholder="Usuário" class="form-control" name="name"><br>
        </div>

        <div class="form-group">
            <input id="box-email" type="email" placeholder="Email" name="email"><br><br>
        </div>

        <div class="form-group">
            <input id="box-senha" type="password" placeholder="Senha" class="form-control" name="password"><br>
        </div>

        <div class="form-group">
            <input id="box-senha" type="password" class="form-control" name="passconfirmation" placeholder="Confirmar senha"><br><br>
        </div>

        <div class="form-group">
            <button id="button-enviar" type="submit" name="submit" value="create">Enviar</button>
        </div>
    </form>
</main>
</body>
</html>