@include('header')
<section>
	<div class="container">
		<p><i class="fas fa-map-marked-alt"></i> Q 106 - Recanto das Emas, Brasília - DF, 72601-202</p>
		<p><i class="fas fa-map-marker-alt"></i> Seu local</p>

		<form>

			<a href="{{ route('adm.localizacao') }}" type="button" class="button-large btn  btn-lg btn-block"><i class="fas fa-location-arrow"></i>
				Selecione seu
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
								src="{{ env('APP_URL') }}/storage/{{ $lunch->pathLanche }}" alt="Hamburguer"></td>
						<td colspan="3">
							<h2>{{ $lunch->nome }}</h2>
							<p>{{ $lunch->descricao }}</p>
						</td>
						<td>{{ $lunch->valor }}</td>
						<td><button class="btn btn-primary"><i class="fas fa-plus-square"></i></button></td>
					</tr>
				</tbody>
			@endforeach

		</table>
	</div>
</section>

</body>
@include('footer')
