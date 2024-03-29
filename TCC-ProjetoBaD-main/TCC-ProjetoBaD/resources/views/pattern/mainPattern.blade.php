<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        
        <!-- CSS file -->
        <link rel="stylesheet" href="/css/style.css">
        
        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        
        <!-- Bootstrap Js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>   
        
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <script src="/js/scripts.js"></script>

    </head>
    <body>

        <!-- Nav Bar-->
        <nav class="navbar bg-body-tertiary expand-lg">
            <div class="container-fluid">
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Pesquisar Aluno" aria-label="Search" id="nav-input">
                <button class="btn btn-sm" type="submit" id="btn-nav">Buscar</button>
              </form>
              <div class="nav-item">
                <a href="/criar/turma" class="btn btn-sm" id="nav-link"><i class="bi bi-plus-circle"></i> Criar Turma</a>
                <a href="" class="btn btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true" id="nav-link"><i class="bi bi-person-circle"></i> Usuário</a>
                <ul class="dropdown-menu " data-popper-placement="bottom-end" aria-labelledby="nav-link" id="nav-dropdown">
                    <li>
                        <a href="" class="dropdown-item">Conta</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a href="/logout" class="dropdown-item">Sair</a>
                    </li>
                </ul>
              </div>
            </div>
        </nav>
        <!-- Barra Lateral -->
        <div class="container-flex">
            <div class="row" id="patternRow">
                <div class="d-flex flex-column flex-shrink-0 p-3" id="sideBar">
                    <h1 id="lateralTitle">Cursos<i class="bi bi-arrow-down"></i></h1>
                    <hr class="divider" id="lateralDivider">
                    <a class="btn" id="curso" href="#">Desenvolvimento De Sistema</a>
                    <a class="btn" id="curso" href="#">Automação Industrial</a>
                    <a class="btn" id="curso" href="#">Place Holder</a>
                    <a class="btn" id="curso" href="#">Place Holder</a>
                    <a class="btn" id="curso" href="#">Place Holder</a>
                    <a class="btn" id="curso" href="#">Place Holder</a>
                </div>
                <div class="col" id="dynamicCol">
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>