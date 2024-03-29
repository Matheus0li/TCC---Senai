@extends('pattern.mainPattern')
@section('title','Criar Dossie')


@section('content')
<div class="container" id="formContainer">
    <div class="col" id="formCol">
        <div class="row" id="formRow">
            <!-- Icone -->
            <div class="col-1 d-flex" id="iconPlace">
                <i class="bi bi-folder-plus" id="userIcon"></i>
            </div>
            <!-- Coluna de criação de turma -->
            <div class="col-5 d-flex flex-column" id="nameSide">
                <h1 id="classTitle">CRIAR TURMA</h1>
                <div class="row" id="userInputRow">
                    <input type="text" id="userInputText" placeholder="Nome">
                </div>
                <div class="row" id="userInputRow">
                    <input type="text" id="userInputText" placeholder="Curso">
                </div>
                <div class="row" id="userInputRow">
                    <input type="text" id="userInputText" placeholder="Status">
                </div>
                <div class="row d-flex">
                    <div class="col-6 d-flex" id="formBtnPosition"><button type="button" class="btn btn-danger" id="formBtn">Apagar</button></div>
                    <div class="col-6 d-flex" id="formBtnPosition"><button type="button" class="btn btn-success" id="formBtn">Salvar</button></div>
                </div>
            </div>
            <!-- Coluna de divisor de Container -->
            <div class="col-1 d-flex" id="spacerCol">
                <div class="" id="separadorVertical"></div>
            </div>
            <!-- Coluna de informaçoes de localização -->
            <div class="col-5 d-flex flex-column" id="rowSide">
            <form action="">
                <h1 id="classTitle">CRIAR CURSO</h1>
                <div class="row" id="userInputRow">
                    <input type="text" id="userInputText" placeholder="Nome">
                </div>
                <!-- Botões de criação/exclusao de dossie -->
                <div class="row d-flex">
                    <div class="col-6 d-flex" id="formBtnPosition"><button type="button" class="btn btn-danger" id="formBtn">Apagar</button></div>
                    <div class="col-6 d-flex" id="formBtnPosition"><button type="button" class="btn btn-success" id="formBtn">Salvar</button></div>
                </div>
            </form>    
            </div>
        </div>
    </div>
</div>

@endsection