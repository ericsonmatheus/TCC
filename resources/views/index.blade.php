@include('header')
    <section>
        <div class="container">
            <p><i class="fas fa-map-marked-alt"></i> Q 106 - Recanto das Emas, Brasília - DF, 72601-202</p>
            <p><i class="fas fa-map-marker-alt"></i> Seu local</p>

            <form>

                <button type="button" class="button-large btn  btn-lg btn-block"><i class="fas fa-location-arrow"></i> Selecione seu
                    endereço</button>

                <div class="form-group">
                    <select class="form-control form-control-lg">
                        <option>selecione uma categoria</option>
                    </select>
                </div>
            </form>
            <table class="table">
                <tbody>
                    <td><h2>Hamburguer</h2></td>
                    <tr>
                        <td width="80px" height="80px" ><img  src="{{ asset('img/hamburguer.png')}}" alt="Hamburguer"></td>
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
    
    <footer>
        
    </footer>
    <a class="cart">
        <div class="cart-info">
            <div><i class="fas fa-shopping-basket"></i></div>
            <div><p>Meu carrinho</p></div>
            <div class="price">19,99</div>
        </div>
    </a>
</body>
@include('footer')