@include('header')
<section>
    <div class="container">
        <div id="showEndereco">
            <form>



                <div class="form-group">
                    <label>Cep:
                        <input class="form-control" name="cep" type="text" id="cep" value="" size="10" maxlength="9"
                            onblur="pesquisacep(this.value);" /></label><br />
                </div>
                <div class="form-group">
                    <label>Rua:
                        <input class="form-control" name="rua" type="text" id="rua" size="60" /></label><br />
                </div>
                <div class="form-group">
                    <label>Numero:
                        <input class="form-control" name="numero" type="text" id="numero" value="" size="10"
                            maxlength="9" /></label>
                    <label>Complemento:
                        <input class="form-control" name="complemento" type="text" id="numero" value="" size="45"
                            maxlength="9" />
                    </label>
                </div>
                <div class="form-group">
                    <label>Bairro:
                        <input class="form-control" name="bairro" type="text" id="bairro" size="40" /></label><br />

                </div>
                <div class="form-group">
                    <label>Cidade:
                        <input class="form-control" name="cidade" type="text" id="cidade" size="40" /></label><br />
                </div>
                

            </form>
            <a href="/public/archives/index.html" type="button" style="background: orange; margin: 30px 0 30px 0px;"
            class="button-large btn  btn-lg btn-block">Continuar</a>
        </div>
    </div>
</section>

</body>
