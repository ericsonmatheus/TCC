@include('header')
<section>
    <div class="container">
       <h2>Configurações</h2>

       
       <div class="form-group">
           <h3>Adicionar um novo usuario</h3>
           <table class="table table-hover">
               <thead>
                 <tr>
                   <th scope="col">#</th>
                   <th scope="col">Nome</th>
                   <th scope="col">CPF</th>
                   <th scope="col">Ação</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <th scope="row"><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></th>
                   <td>Nome</td>
                   <td>CPF</td>
                   <td><button type="button" class="btn btn-danger">Remover</button></td>
                 </tr>
                 <tr>
                   <th scope="row"><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"></th>
                   <td>Nome</td>
                   <td>CPF</td>
                   <td><button type="button" class="btn btn-danger">Remover</button></td>
                 </tr>
           
               </tbody>
               <a href="{{ route('adm.funcionario') }}" id="adicionarComplemento" class="btn btn-success"><i class="fas fa-plus-square"></i> Adicionar</a>

             </table>
             <table class="table">
               <tbody>
                   <td colspan="6">
                       <h3>Endereço fisico da loja</h3>
                   </td>
                   <tr>
                       <td colspan="5">Endereço</td>
                       <td><a href="/public/archives/Localizacao.html"><i class="fas fa-edit"></i> Editar</a></td>
                   </tr>
                   
               </tbody>
             </table>
             <a href="#" type="button" class="button-large btn  btn-lg btn-block btn-success"><i class="fas fa-door-open"></i> Abrir Loja</a>

       </div>
    </div>
     </section>

@include('footer')