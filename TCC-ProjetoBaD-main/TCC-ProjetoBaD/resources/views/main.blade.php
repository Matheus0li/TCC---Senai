<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Localizador De Dossie</title>
        
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css">

    </head>
    <body>
    <h1>Localizador de dossie</h1>
    <div>
        @if(session('msg'))
            <p class="msg"> {{session('msg') }}</p>
        @endif
    </div>
    <div class="container text-center">
        <div class="row"> 
            <div class="col">
                ID
                @foreach($dossies as $dossie)
                    <p>{{$dossie->id}}</p>
                @endforeach
            </div>    
            <div class="col">
                ALUNO
                @foreach($dossies as $dossie)
                    <p>{{$dossie->nome}}</p>
                @endforeach
            </div>
            <div class="col">
                CURSO
                @foreach($dossies as $dossie)
                    <p>{{$dossie->curso}}</p>
                @endforeach
            </div>
            <div class="col">
                TURMA
                @foreach($dossies as $dossie)
                    <p>{{$dossie->turma}}</p>
                @endforeach
            </div>
            <div class="col">
                ESTANTE
                @foreach($dossies as $dossie)
                    <p>{{$dossie->estante}}</p>
                @endforeach
            </div>
            <div class="col">
                LADO
                @foreach($dossies as $dossie)
                    <p>{{$dossie->lado}}</p>
                @endforeach
            </div>
            <div class="col">
                BUSCA TST
                @foreach($dossies as $dossie)
                    <p>
                    <a href="/dossie/{{$dossie->nome}}" class="btn btn-primary">Busca</a>
                    </p>
                @endforeach
            </div>
        </div>
    </div>
    </body>
</html>
