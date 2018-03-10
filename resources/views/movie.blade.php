@extends('template.main')

@section('meta')
	<meta property="og:url"           content="http://peliculascineencasa.com/{{ $movie->slug }}" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="{{ $movie->title }}" />
	<meta property="og:description"   content="{{ $movie->synopsis }}" />
	<meta property="og:image"         content="http://peliculascineencasa.com/{{ $movie->image }}" />
	
	<meta name="Title" content="Ver {{ $movie->title }} online y descargar">
	<meta name="description" content="{{ $movie->title }} película para ver online y descargar por MEGA en HD 1080p y audio latino">
	<meta property="fb:app_id" content="1651000515218750"/>
@endsection

@section('css')
	<script src="https://www.paypalobjects.com/api/checkout.js"></script>
@endsection

@section('title')
	{{ $movie->title }} ({{ $movie->year }}) online o descargar HD
@endsection

@section('jumbotron-h1')
	{{ $movie->title }} online 1080p en audio latino
@endsection

@section('jumbotron-p')
	Pelicula <strong>{{ $movie->title }} online</strong> para descargar en calidad HD 1080p y audio latino. Descarga disponible por MEGA
@endsection

@section('content')
	<div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.7&appId=1651000515218750";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
	<div class="container">
		
		<h2 class="text-center">{{ $movie->title }}</h2><hr>

		<div class="row detail-movie">

			<div class="col-sm-6">
				<img src="{{ url($movie->image) }}" id="image-movie" class="img-responsive" alt="{{ $movie->title }} online o descargar" title="{{ $movie->title }} online o descargar">
			</div>
			<div class="col-sm-6">
				<br>
				<p class="text-justify">{{ $movie->synopsis }}<p>
				<p>
					<strong>Genero(s): </strong>
					@foreach($movie->genres as $genre)
						>{{ $genre->name }}
					@endforeach
				</p>
				<p>
					<strong>Calidad: </strong> 1080p
				</p>
				<p>
					<strong>Audio: </strong>Español Latino
				</p>
				<p>
					<strong>Audio Descarga: </strong>Español Latino e ingles subtitulada
				</p>

				<br>
				<div class="alert alert-info" role="alert">
					<p><strong>¿Sabias que? </strong>Una web requiere gastos de alojamiento, mantenimiento y muchas horas de trabajo y permanece online gracias al apoyo de quienes nos visitan. Una pequeña donación será de gran ayuda para continuar en línea mucho mas tiempo. Ayudanos!</p>
				</div>
				<div class="text-center">
					<h3>¿Cuanto le gustaría donar?</h3>
					<h4 id="amountDonation"></h4>
					<div class="form-group hidden" id="cancelDonation">
						<button onclick="changeAmount()" class="btn btn-danger">Cancelar</button>
					</div>
					<div class="row" id="spaceDonation">
						<div class="col-xs-3 col-xs-offset-3">
							<input type="number" id="donation" class="form-control">
						</div>
						<div class="col-xs-1">
							<h4>USD</h4>
						</div>
						<div class="col-xs-2">
							<button onclick="selectAmount()" class="btn btn-success">Donar</button>
						</div>
					</div>
					<div id="paypal-button" class="hidden"></div>
				</div>
			</div>
		</div>
		
		@if($movie->completa=='NO')
			<br>
			<div class="alert alert-danger" role="alert">
				<strong>ATENCION: </strong>
				Por el momento este contenido solo esta disponible para descargar y puede que en menor calidad.
			</div>
		@endif

		<div class="row spaceButtons">
			<div class="col-sm-6 col-md-3 text-center">
				<br>
				<button onclick="JavaScript:obtenerVideo('{{ url($movie->id.'/video/1') }}')" class="button-p">Trailer</button>
			</div>

			@if($movie->completa=='SI')
				<div class="col-sm-6 col-md-3 text-center">
					<br>
					<button onclick="JavaScript:obtenerVideo('{{ url($movie->id.'/video/2') }}')" class="button-p">Opción 1</button>
				</div>
			@endif

			@if($movie->completa=='SI')
				<div class="col-sm-6 col-md-3 text-center"><br><button onclick="JavaScript:obtenerVideo('{{ url($movie->id.'/video/3') }}')" class="button-p">Opción 2</button></div>
			@endif

			<div class="col-sm-6 col-md-3 text-center"><br><button onclick="JavaScript:Download()" class="button-p">Descargar</button></div>	
		</div>

		<div class="row spaceVideo">
			<p class="text-center spaceClose"><button onclick="JavaScript:closeAll()" class="button-d">Cerrar</button></p>
			<p class="text-center" id="thevideos2">{!! str_replace('href="', 'href="http://adf.ly/11273555/http://adf.ly/11273555/', $movie->thevideos2) !!}</p>
			<div class="col-md-8 col-md-offset-2">
				
				<div id="spaceVideo" class="embed-responsive embed-responsive-16by9">
				  	
				</div>

				<div class="loading text-center" id="loading">
					<img src="{{ url('images/loading.gif') }}" class="img-responsive img-limit" >
				</div>
			</div>
			<div class="col-xs-12 text-center spaceDownload">
				@if($movie->download <> ' ')
					<a target="_blank" class="button-def" href="http://adf.ly/11273555/http://adf.ly/11273555/{{ url('download/'.dechex($movie->id) ) }}" rel="nofollow">MEGA</a>
				@endif

				@if($movie->uploaded <> ' ' && false)
					<a target="_blank" class="button-def" href="http://adf.ly/11273555/http://adf.ly/11273555/{{ $movie->uploaded }}" rel="nofollow">Uploaded</a>
				@endif

				@if($movie->turbobit <> ' ' && false)
					<a target="_blank" class="button-def" href="http://adf.ly/11273555/http://adf.ly/11273555/{{ $movie->turbobit }}" rel="nofollow">Turbobit</a>
				@endif
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<br><h2 class="text-center">Comentarios sobre {{ $movie->title }}</h2>
				<div class="fb-comments" data-href="http://peliculascineencasa.com/{{ $movie->slug }}" data-width="100%" data-numposts="5"></div>
			</div>
		</div>

		@if( isset($moviesRelations) )
			
			<div class="row">
				
				<div class="col-md-12">
					<hr><h3>Películas Relacionadas</h3><hr>
				</div>
				
				@foreach($moviesRelations as $mr)

					<div class="col-xs-12 col-sm-6 movieRelation spaceEffect">
						<div class="row">
							<a href="{{ url($mr->slug) }}">
								<div class="col-sm-6 col-md-4">
									<img src="{{ $mr->image }}" alt="{{ $mr->title }}" title="{{ $mr->title }}" class="img-responsive">
								</div>
								<div class="col-sm-6 col-md-8">
									<h4>{{ $mr->title }}</h4>
									<p class="text-justify">{{ str_limit($mr->synopsis,60) }}</p>
								</div>
							</a>
						</div>
					</div>

				@endforeach

			</div>

		@endif

		<div class="row">
				
			<div class="col-md-12">
				<hr><h3>Películas Recomendadas</h3><hr>
			</div>

			@foreach($moviesRecomendations as $mr)

				<div class="col-xs-12 col-sm-6 movieRelation spaceEffect">
					<div class="row">
						<a href="{{ url($mr->slug) }}">
							<div class="col-sm-6 col-md-4">
								<img src="{{ url($mr->image) }}" alt="{{ $mr->title }}" title="{{ $mr->title }}" class="img-responsive">
							</div>
							<div class="col-sm-6 col-md-8">
								<h4>{{ $mr->title }}</h4>
								<p class="text-justify">{{ str_limit($mr->synopsis,60) }}</p>
							</div>
						</a>
					</div>
				</div>

			@endforeach

		</div>

	</div>
@endsection

@section('js')
	<script>
		var amountToDonation = 0;

		paypal.Button.render({
			env: '{{ env('APP_ENV') === 'production' ? 'production' : 'sandbox' }}', // Or 'sandbox',

			commit: true, // Show a 'Pay Now' button

			client: {
				sandbox:    'AUQ0NPbGLi30YZi9130zPk-EU7U4nH0C1BbC1ctBf46npA_dVO_-dvL2whlhfJ_DkjLKfwhmLgER2-T7',
				production: 'xxxxxxxxx'
			},

			style: {
				color: 'blue',
				size: 'medium'
			},

			payment: function(data, actions) {
				return actions.payment.create({
					payment: {
						transactions: [
							{
								amount: { total: amountToDonation + '.00', currency: 'USD' }
							}
						]
					}
				});
			},

			onAuthorize: function(data, actions) {
				return actions.payment.execute().then(function(payment) {
					console.log(payment.state);
					if (payment.state === 'approved') {
						location.href = '{{ url('alert/success') }}';
					}

				});
			},

			onCancel: function(data, actions) {
				console.log('Cancelado');
			},

			onError: function(err) {
				alert('Error de comunicación, intente de nuevo.');
			}
		}, '#paypal-button');

		function selectAmount()
		{
			var donation = $('#donation').val();

			if ((donation = parseInt(donation)) && donation >= 1) {
				amountToDonation = donation;

				$('#spaceDonation').css('display', 'none');
				$('#paypal-button').removeClass('hidden');
				$('#amountDonation').html(donation + ' USD');
				$('#cancelDonation').removeClass('hidden');
			}
		}

		function changeAmount()
		{
			amountToDonation = 0;

			$('#spaceDonation').css('display', 'block');
			$('#paypal-button').addClass('hidden');
			$('#amountDonation').html('');
			$('#cancelDonation').addClass('hidden');
		}
	</script>
@endsection
