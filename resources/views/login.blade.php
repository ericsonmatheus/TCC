<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="{{ mix('css/login.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
    <div class="container-login">
        <div class="content first-content">
            <div class="first-column">
            <img width="200vh" height="200vh" src="/img/logo.png" alt="Logo do Site">
                <h2 class="title title-primary">Entre no sistema da Burguerboss!</h2>
  <!--              <div class="social-media">
                    <ul class="list-social">
                        <a class="link-social-media" href="#">
                            <li class="item-social"><i class="fab fa-facebook-f"></i></li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social"><i class="fab fa-google-plus-g"></i></li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social"><i class="fab fa-twitter"></i></li>
                        </a>
                    </ul>
                </div><!--social-media
                <p>ou</p> -->
                <form action="{{ route('adm.loginPost') }}" class="form" method="post">
                    @csrf
                   <!--<label class="label-input" for="">
                        <i class="icon-modify far fa-envelope"></i>
                        <input type="email" name="email" id="email" placeholder="E-mail">
                    </label>
                    <label class="label-input" for="">
                        <i class="icon-modify fas fa-lock"></i>
                        <input type="password" name="password" id="password" placeholder="Senha"> 
                    </label>--> 
                    
                    <div class="form-group col-md-12">
                        <label class="label-input" for="">
                            <i class="icon-modify far fa-envelope"></i>
                            <input type="text" name="login" id="email" placeholder="E-mail" required>
                        </label>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="label-input" for="">
                            <i class="icon-modify fas fa-lock"></i>
                            <input type="password" name="password" id="senha" placeholder="Senha" required>
                        </label>

                    </div>
                    <button type="submit" class="btn">Entrar</button>
                </form>
                <p><a class="txt txt-primary" href="#">Esqueceu sua senha?</a></p>
            </div> <!--First colum-->
  <!--          <div class="second-column">
                <img width="100vh" height="100vh" src="/img/logo.png" alt="Logo do Site">
                <p class="txt txt-second">?? novo aqui? <a id="signup" class="txt txt-thrid" href="#">Crie uma conta</a></p>
            </div> <!--Second colum
        </div> <!--First content
        <div class="content second-content">
            <div class="first-column">
               <h2 class="title title-primary">Criar conta!</h2>

               <div class="social-media">
                    <ul class="list-social">
                        <a class="link-social-media" href="#">
                            <li class="item-social"><i class="fab fa-facebook-f"></i></li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social"><i class="fab fa-google-plus-g"></i></li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social"><i class="fab fa-twitter"></i></li>
                        </a>
                    </ul>
                </div><!--social-media
                <p>ou</p>

               <form action="" method="POST" class="form">
                    <label class="label-input" for="">
                        <input type="nome" id="nome" placeholder="nome">
                    </label>
                    <label class="label-input" for="">
                        <input type="Sobrenome" id="sobrenome" placeholder="Sobrenome"> 
                    </label>  
                    <label class="label-input" for="">
                        <input type="email" name="email" id="email" placeholder="E-mail">
                    </label>
                    <label class="label-input" for="">
                        <input type="tel" name="number" id="number" placeholder="61 - 0 000 000">
                    </label>     
                    <label class="label-input" for="">
                        <input type="password" name="senha" id="senha" placeholder="Senha">
                    </label>
                    
               </form>
               <button id="next" class="btn">Proximo</button>
            </div> <!--First colum
            <div class="second-column">
                <img src="/img/logo.png" alt="Logo do site">
            </div> <!--Second colum
        </div><!--Second content
        <div class="content third-content">
            <div class="first-column">
                <h2 class="title title-primary">Criar conta!</h2>
                
                <form action="" method="POST" class="form">
                    <label class="label-input" for="">
                        <input type="CEP" placeholder="CEP">
                    </label>
                    <label class="label-input" for="">
                        <input type="cidade" placeholder="Cidade">
                    </label>
                    <label class="label-input" for="">
                        <input type="endereco" name="endereco" id="endereco" placeholder="Endere??o">
                    </label>
                    <label class="label-input" for="">
                        <input type="numero" name="numero" id="numero" placeholder="Numero">
                    </label>
                    <label class="label-input" for="">
                        <input type="complemento" name="complemento" id="complemento" placeholder="Complemento">
                    </label>
                    <label class="label-input" for="">
                        <input type="pReferencia" name="pReferencia" id="pReferencia" placeholder="Ponto de Referencia">
                    </label>
                    

                    
                </form>
                <button class="btn">Cadastrar</button>
             </div> <!--First colum
             <div class="second-column">
                 <img src="/img/logo.png" alt="Logo do site">
             </div> <!--Second colum
        </div> <!--third content-->
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="{{ mix('js/login.js') }}"></script>
</html>