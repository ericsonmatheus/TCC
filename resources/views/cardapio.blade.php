@include('header')
<section>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cardapio</li>
            </ol>
        </nav>

        <form>
            <a id="show" class="btn btn-outline-success"><i class="fas fa-plus-square"></i> Adicionar</a>
        </form>
        <table class="table">
            <tbody>
                <td>
                    <h2>Hamburguer</h2>
                </td>
                <tr>
                    <td width="80px" height="80px"><img src="IMG/Hamburguer.jfif" alt="Hamburguer"></td>
                    <td colspan="3">
                        <h2>X - Tudo</h2>
                        <p>Salada, alface, 2 carne de 250g</p>
                    </td>
                    <td>R$ 15,99</td>
                    <td>
                        <button class="btn btn-primary"><i class="fas fa-plus-square"></i></button>
                    </td>
                </tr>
                <tr>
                    <td width="80px" height="80px"><img src="IMG/Hamburguer.jfif" alt="Hamburguer"></td>
                    <td colspan="3">
                        <h2>X - Tudo</h2>
                        <p>Salada, alface, 2 carne de 250g</p>
                    </td>
                    <td>R$ 15,99</td>
                    <td><button class="btn btn-primary"><i class="fas fa-plus-square"></i></button></td>
                </tr>
                <tr>
                    <td width="80px" height="80px"><img src="IMG/Hamburguer.jfif" alt="Hamburguer"></td>
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
    <div class="container">
        <div id="adicionar">
            <h2>Nome</h2>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a id="btnDetalhes" class="nav-link" href="#">Detalhes</a>
                </li>
                <li class="nav-item">
                    <a id="btnComplemento" class="nav-link" href="#">Complementos</a>
                </li>

            </ul>

            <form action="{{ route('adm.upload') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div id="detalhes">
                    <div class="form-group">
                        <div class="card text-center">
                            <div class="card-header">
                                Imagem de capa
                            </div>
                            <div class="card-body">
                                <p class="card-text"><img width="100px" height="100px"
                                        src="{{ asset('img/img.png') }}" alt="">
                                <P>Arraste uma imagem</P>
                                <p>-ou-</p>
                                </p>
                                <input type="file" name='imgComida' class="btn btn-primary">
                            </div>
                        </div>
                    </div>
										<div class="form-group">
											<select class="form-control">
												<option>selecione uma categoria</option>
												@foreach ($categories as $category)
													<option>{{ $category->nome }}</option>
												@endforeach
											</select>
										</div>
                    
                    <div class="form-group">
                        <label for="nomePrato">Nome do prato</label>
                        <input type="text" class="form-control" id="nomePrato" placeholder="Nome do prato">
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <textarea class="form-control" id="descricao" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="valor">Valor do prato</label>
                        <input class="form-control" type="text" name="valor" id="valor">
                    </div>
                </div>
						</form>

                <div id="complemento">

                    <div class="form-group">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Descrição</th>
                                    <th scope="col">valor</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"><input class="form-check-input" type="checkbox" value=""
                                            id="defaultCheck1"></th>
                                    <td>Nome</td>
                                    <td>Descrição</td>
                                    <td>Valor</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <a id="btnNovoComplemento" class="btn btn-primary"><i class="fas fa-plus-square"></i> Novo</a>
                    <div id="novoComplemento">
                        <div class="form-group">
                            <label for="nomeComplemento">Nome do complemento</label>
                            <input type="text" class="form-control" id="nomeComplemento"
                                placeholder="Nome do complemento">
                        </div>
                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <textarea class="form-control" id="descricao" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="valor">Valor do Complemento</label>
                            <input class="form-control" type="text" name="valor" id="valor">
                        </div>
                        <a id="adicionarComplemento" class="btn btn-success"><i class="fas fa-plus-square"></i>
                            Adicionar</a>
                    </div>

                </div>

                <button type="button" id="close" class="btn btn-danger">Fechar</button>
                <button type="button" class="btn btn-success">Adicionar</button>

        </div>
    </div>
</section>

<footer id="rodape">
    &copy;Burguerboss<em id="date"></em>. Todos os direitos reservados
</footer>

@include('footer')
