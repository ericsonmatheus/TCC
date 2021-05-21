@include('header')
<section>
    <div class="container">
       <h2>Adicionar um novo usuario</h2>

       <form action="" method="POST" class="form">
           <div class="row">
               <div class="col">
                   <input class="form-control" type="nome" id="nome" placeholder="nome">
               </div>
               <div class="col">
                   <input class="form-control" type="Sobrenome" id="sobrenome" placeholder="Sobrenome"> 

               </div>

           </div>
           <div class="form-group">
                   <input class="form-control" type="email" name="email" id="email" placeholder="E-mail">
           </div>
           
           <div class="form-group">
                   <input class="form-control" type="tel" name="number" id="number" placeholder="61 - 0 000 000">
           </div>
           
           <div class="form-group">
                   <input class="form-control" type="password" name="senha" id="senha" placeholder="Senha">

           </div>
           
           <a href="configuracao.html" type="button" class="button-large btn  btn-lg btn-block btn-success">Continuar</a>

      </form>


    </div>
     </section>
    </body>
     @include('footer')