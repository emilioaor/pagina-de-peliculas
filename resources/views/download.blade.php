@extends('template.main')

@section('meta')
	<meta property="og:url"           content="http://peliculascineencasa.com" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="Cine en Casa" />
	<meta property="og:description"   content="Ver y descargar películas online en full HD 1080p y audio latino gratis!. Descargas a 1 solo link desde MEGA" />
	<meta property="og:image"         content="http://peliculascineencasa.com/images/banner.jpg" />
	<meta name="robots" content="noindex">
@endsection

@section('css')
	<script src="https://www.paypalobjects.com/api/checkout.js"></script>
@endsection

@section('title')
	Ver Peliculas Online o Descargar HD gratis
@endsection

@section('jumbotron-h1')
	Ver y descargar películas online HD 1080p audio latino gratis
@endsection

@section('jumbotron-p')
	Tus películas favoritas en línea todas disponibles para ver y descargar en full HD 1080p audio latino 1 solo link MEGA gratis!. Tenemos para ti un sin fin de horas de películas desde la comodidad de tu hogar.
@endsection

@section('content')
	<div class="container">
		
		<h2 class="text-center">Descargar {{ $movie->title }}</h2><hr>
		<div class="spaceDown col-md-12">
			<div class="col-md-6 irDownload">
				<a href="{{ $movie->download }}" rel="nofollow" >
					
					<img src="{{ url($movie->image) }}" class="img-responsive" alt="Descargar {{ $movie->title }}" title="Descargar {{ $movie->title }}">

					<p class="text-justify">{{ $movie->synopsis }}</p>
				</a>

				<p class="text-center"><a href="{{ $movie->download }}" rel="nofollow" class="button-p button-p-lg">MEGA</a></p>
			</div>
			<div class="col-md-6">
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