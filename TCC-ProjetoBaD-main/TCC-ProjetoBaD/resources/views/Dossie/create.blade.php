@extends('pattern.mainPattern')
@section('title','Criar Dossie')


@section('content')
<!-- Container de criação de dossie/aluno -->
<div class="container" id="formContainer">
    <div class="col" id="formCol">
        <!-- Form da Criação de dossie -->
        <div class="row" id="formRow">
            <!-- Coluna do icone de Usuario -->
            <div class="col-1 d-flex" id="iconPlace">
                <i class="bi bi-person-circle" id="userIcon"></i>
            </div>
            <!-- Coluna de informações pessoais -->
            <div class="col-5 d-flex flex-column" id="nameSide">
                <div class="row" id="userInputRow">
                    <input type="text" id="userInputText" placeholder="Nome">
                </div>
                <div class="row" id="userInputRow">
                    <input type="text" id="userInputText" placeholder="Matricula">
                </div>
                <div class="row" id="userInputRow">
                    <input type="text" id="userInputText" placeholder="Curso">
                </div>
                <div class="row" id="userInputRow">
                    <input type="text" id="userInputText" placeholder="Status">
                </div>
            </div>
            <!-- Coluna de divisor de Container -->
            <div class="col-1 d-flex" id="spacerCol">
                <div class="" id="separadorVertical"></div>
            </div>
            <!-- Coluna de informaçoes de localização -->
            <div class="col-5 d-flex flex-column" id="rowSide">
                <div class="row" id="userInputRow">
                    <input type="text" id="userInputText" placeholder="Corredor">
                </div>
                <div class="row" id="userInputRow">
                    <input type="text" id="userInputText" placeholder="Lado">
                </div>
                <div class="row" id="userInputRow">
                    <input type="text" id="userInputText" placeholder="Coluna">
                </div>
                <div class="row" id="userInputRow">
                    <input type="text" id="userInputText" placeholder="Gaveta">
                </div>
                <!-- Botões de criação/exclusao de dossie -->
                <div class="row d-flex">
                    <div class="col-6 d-flex" id="formBtnPosition"><button type="button" class="btn btn-danger" id="formBtn">Apagar</button></div>
                    <div class="col-6 d-flex" id="formBtnPosition"><button type="button" class="btn btn-success" id="formBtn">Salvar</button></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection