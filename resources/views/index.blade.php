@include('header')
<section>
    <div class="container">
        <p><i class="fas fa-map-marked-alt"></i> Q 106 - Recanto das Emas, Brasília - DF, 72601-202</p>
        <p><i class="fas fa-map-marker-alt"></i> Seu local</p>

        <form>

            <a href="#" type="button" class="button-large btn  btn-lg btn-block"><i class="fas fa-location-arrow"></i> Selecione seu
                endereço</a>

                <ul class="nav justify-content-center">
                    <li class="nav-item">
                      <a class="nav-link" href="#">#hamburguer</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">#Refri</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">#Batata</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">#Combos</a>
                    </li>
                  </ul>

            <div class="form-group">
                
                    <input class="form-control" style="justify-items: center;" type="text" name="pesquisa" id="pesquisa" placeholder="Pesquisa"> 
            </div>
        </form>
        <table class="table">
            <tbody>
                <td><h2>Hamburguer</h2></td>
                <tr>
                    <td width="80px" height="80px" min-width="55px" min-height="55px" ><img  src="{{ asset('img/hamburguer.png') }}" alt="Hamburguer"></td>
                    <td colspan="3">
                        <h2>X - Tudo</h2>
                        <p>Salada, alface, 2 carne de 250g</p>
                    </td>
                    <td>R$ 15,99</td>
                    <td><button class="btn btn-primary"><i class="fas fa-plus-square"></i></button></td>
                </tr>
                
            </tbody>
        </table>
    </div>
</section>


<a href="/public/archives/carrinho.html" class="cart">
    <div class="cart-info">
        <div><i class="fas fa-shopping-basket"></i></div>
        <div><p>Meu carrinho</p></div>
        <div class="price">19,99</div>
    </div>
</a>
<footer id="rodape">
    &copy; Burguerboss<em id="date"></em>. Todos os direitos reservados
</footer>
</body>
@include('footer')