<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	@yield('meta')
	<link rel="icon" type="image/png" href="{{ url('images/icono.png') }}" />
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ url('css/estilos.css') }}">
</head>
<body>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-70129542-6', 'auto');
	  ga('send', 'pageview');

	</script>

	<div id="navbar">
		<div class="container">
			<div class="row">
				<div class="col-xs-5 col-md-6 col-icon">
					<a href="{{ url('/') }}">
						<img src="{{ asset('images/logo_bar.png') }}" class="img-responsive" id="log" alt="Ver películas online o descargar HD gratis" title="Ver películas online o descargar HD gratis">
						<h3>Cine en Casa</h3>
					</a>
				</div>
				<div class="col-xs-7 col-md-6 col-search">
					<form action="" method="get">
							
						<div class="input-group">
							<input type="text" class="form-control" name="title" placeholder="Buscar...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
							</span>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="jumbotron">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<a href="{{ url('/') }}"><img src="{{ url('images/logo.png') }}" alt="Ver películas online o descargar HD gratis" title="Ver películas online o descargar HD gratis"></a>
				</div>

				<div class="col-md-9">
					<h1 class="text-center">@yield('jumbotron-h1')</h1>
					<p class="text-justify">@yield('jumbotron-p')</p>	
				</div>
			</div>
		</div>
	</div>

	@include('template.nav')

	<section class="main">
		@yield('content')
	</section>

	<aside>
		
		<div class="container">
			<hr class="hr">
			<div class="row">

				<div class="col-md-6">
					<h3>Suscribir</h3>
					<form action="{{ url('subscriber/add') }}" method="post">

						{{ csrf_field() }}

						<div class="form-group">
							<label for="email" class="sr-only">Correo</label>
							<input type="text" class="form-control" name="email" placeholder="ejemplo@mail.com" required>
						</div>

						<div class="form-group">
							<button type="submit" class="button-p">Suscribir</button>
						</div>
					</form>
				</div>

				<div class="col-md-6">
					<h3>Redes Sociales</h3>
					<div class=".col-md.12">
						<p>Siguenos por nuestras redes sociales</p>
						<a target="_blank" href="https://www.facebook.com/peliculascineencasa" rel="nofollow"><span class="social-icon facebook"></span></a>
						<a target="_blank" href="https://plus.google.com/b/114711418691165972764/+CineenCasaPeliculas" rel="nofollow"><span class="social-icon googleplus"></span></a>
						<a target="_blank" href="https://www.youtube.com/channel/UCCfK6k6DKyv1jCxHFJ3mUzg" rel="nofollow"><span class="social-icon youtube"></span></a>
					</div>
				</div>

			</div>
		</div>
	</aside>

	<footer>
		<div class="container">
			<p class="text-center">Películas Online | Películas Gratis | Descargar Películas | Películas HD 1080p | Descargar Películas por MEGA</p>
		</div>
	</footer>
	

	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ url('js/bootstrap.min.js') }}"></script>
	<script src="{{ url('js/eventos.js') }}"></script>
</body>
</html>