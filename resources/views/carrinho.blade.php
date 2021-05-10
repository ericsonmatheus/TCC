@include('header')
<section>
    <div class="container">
        <a href="{{ route('adm.index') }}"><i class="fas fa-arrow-left"></i></a>
        <table class="table">
            <tbody>
                <td>
                    <h2>Seus itens</h2>
                </td>
                <tr>
                    <td width="80px" height="80px"><img src="{{ asset('img/hamburguer.png') }}" alt="Hamburguer"></td>
                    <td colspan="3">
                        <h2>X - Tudo</h2>
                        <p>Salada, alface, 2 carne de 250g</p>
                    </td>
                    <td>R$ 15,99</td>
                    <td><input class="form-control" value="1" type="number" name="quantidade" id="quantidade" min="0"></td>
                </tr>
            </tbody>
            
            <tbody>
                <td colspan="6">
                    <h2>Local de Entrega</h2>
                </td>
                <tr>
                    <td colspan="5">Aqui fica o local de entrega</td>
                    <td><a href="/public/archives/Localizacao.html"><i class="fas fa-edit"></i> Editar</a></td>
                </tr>
                
            </tbody>

            <tbody>
                <tr>
                    <td colspan="5">Subtotal</td>
                    <td>
                        <p>R$ 15,99</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="5">Entrega</td>
                    <td>
                        <p>R$ 4,99</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="5">
                        <h2>Total</h2>
                    </td>
                    <td>
                        <p class="dinheiro" style="font-weight: bold;"></p>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <td colspan="6">
                    <h2>Forma de pagamento</h2>
                </td>
                <tr>
                    <td>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="optCartao" name="optCartao" class="custom-control-input">
                            <label class="custom-control-label" for="optCartao">Cartão</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="optDinheiro" name="optDinheiro" class="custom-control-input">
                            <label class="custom-control-label" for="optDinheiro">Dinheiro</label>
                        </div>
                    </td>
                </tr>
                <div id="show-cartao">
                    <tr>
                        <td colspan="6">
                            <p style="font-weight: bold;">cartão</p>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="5">Você não possui cartão</td>
                        <td><a href="/public/archives/carteira.html" class="btn btn-outline-success"><i
                                    class="fas fa-plus-square"></i> Adicionar</a></td>
                    </tr>
                    <tr>
                        <td colspan="5">Pagar com cartão na Entrega</td>
                        <td>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="entregaCartao" name="entregaCartao"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="entregaCartao"></label>
                            </div>
                        </td>
                    </tr>
                </div>
                

                <div id="show-dinheiro">
                    <tr>
                        <td colspan="6">
                            <p style="font-weight: bold;">Dinheiro</p>
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="5">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="troco" name="troco" class="custom-control-input">
                                <label class="custom-control-label" for="troco"> Vai precisar de troco?</label>
                            </div>
                        </td>
                        <td><input class="form-control" type="text" readonly></td>

                    </tr>
                </div>
            </tbody>

        </table>

        <button type="button" style="background: orange; margin-bottom: 30px;"
            class="button-large btn  btn-lg btn-block">Finalizar</button>
    </div>

</section>

</body>
@include('footer')
