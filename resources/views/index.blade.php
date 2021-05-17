@include('header')
<section>
	<div class="container">

		@if (isset($address))
			<p><i class="fas fa-map-marked-alt"></i> {{ "$address->rua - $address->bairro, $address->cidade, $address->cep" }}</p>
			<p><i class="fas fa-map-marker-alt"></i> {{ "$address->complemento, $address->numero" }}</p>
		@else
			<p><i class="fas fa-map-marked-alt"></i> Sem Local</p>
			<p><i class="fas fa-map-marker-alt"></i> Sem local</p>
		@endif 
		
		<form>

			<a href="{{ route('adm.localizacao') }}" type="button" class="button-large btn  btn-lg btn-block"><i class="fas fa-location-arrow"></i>
				Selecione seu endereço</a>

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

				<input class="form-control" style="justify-items: center;" type="text" name="pesquisa" id="pesquisa"
					placeholder="Pesquisa">
			</div>
		</form>
		<table class="table">
			@foreach ($lunchs as $lunch)
				<tbody>
					<td>
						<h2>{{ $lunch->idcategoria }}</h2>
					</td>
					<tr>
						<td width="80px" height="80px" min-width="55px" min-height="55px"><img
								src="{{ env('APP_URL') }}/storage/{{ $lunch->pathlanche }}" alt="Hamburguer"></td>
						<td colspan="3">
							<h2>{{ $lunch->nome }}</h2>
							<p>{{ $lunch->descricao }}</p>
						</td>
						<td>{{ $lunch->valor }}</td>
						<td><a href="{{ route('adm.addComanda', $lunch->id) }}"><button class="btn btn-primary"><i class="fas fa-plus-square"></i></button></a></td>
					</tr>
				</tbody>
			@endforeach

		</table>
	</div>
</section>
<footer>
        <a href="{{ route('adm.carrinho') }}" class="cart">
            <div class="cart-info">
                <div><i class="fas fa-shopping-basket"></i></div>
                <div><p>Meu carrinho</p></div>
                <div class="price">19,99</div>
            </div>
        </a>
</footer>

</body>
@include('footer')
