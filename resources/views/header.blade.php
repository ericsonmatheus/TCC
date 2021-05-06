<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title >Index</title>
    <link rel="icon" 
      type="image/logo.png" 
      href="{{ asset('img/logo.png') }}" />

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
            <a href="{{ route('adm.login') }}" class="fas fa-door-open" onclick="mostrar(this)"> ABERTO
            </a>
        </nav>
    </header>
    <nav id="menu">
        <a id="fecharMenu"><i class="fas fa-bars"> Fechar</i></a>
        <a href="{{ route('adm.index')}}"><i class="fas fa-home"></i> Home</a>
        <a href="{{ route('adm.cardapio') }}"><i class="fas fa-list-alt"></i> Cardapio</a>
        <a href="{{ route('adm.carteira') }}"><i class="fas fa-wallet"></i> Carteira</a>
        <a href="{{ route('adm.sobre') }}"><i class="fas fa-exclamation-circle"></i> Sobre</a>
        <a href="{{ route('adm.contato') }}"><i class="fas fa-tty"></i> Contato</a>
        <a href="#"><i class="fas fa-tools"></i> Configurações</a>
        <div class="copyright">&copy; Burguerboss<em id="date"></em>. Todos os direitos reservados.</div>
    </nav>

