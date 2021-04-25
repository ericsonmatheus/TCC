<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    <link rel="stylesheet" href="{{ mix('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar">
            <a class="form-inline" id="abrirMenu"><i class="fas fa-bars"></i></a>
            <img src="{{ asset('img/logo.png') }}" width="150px" height="150px" alt="">
            <a class="form-inline" href="">
                <i class="fas fa-search"></i>
            </a>
        </nav>
    </header>
    <nav id="menu">
        <a id="fecharMenu"><i class="fas fa-bars"> Fechar</i></a>
        <a href="{{ route('adm.index')}}">Home</a>
        <a href="{{ route('adm.cardapio') }}">Cardapio</a>
        <a href="{{ route('adm.carteira') }}">Carteira</a>
        <a href="{{ route('adm.sobre') }}">Sobre</a>
        <a href="{{ route('adm.contato') }}">Contato</a>
        <a href="#">Configurações</a>
    </nav>