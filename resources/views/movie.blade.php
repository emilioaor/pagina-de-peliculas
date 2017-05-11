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

@section('title')
	{{ $movie->title }} ({{ $movie->year }}) online o descargar HD desde 10 bsF
@endsection

@section('jumbotron-h1')
	{{ $movie->title }} online 1080p en audio latino
@endsection

@section('jumbotron-p')
	Venta <strong>{{ $movie->title }} online</strong> para descargar en calidad HD 1080p y audio latino. Descarga disponible por MEGA
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
					<a mp-mode="dftl" href="https://www.mercadopago.com/mlv/checkout/start?pref_id=213149413-5f1d12e5-98ff-4841-8a8d-959383fccfec" name="MP-payButton" class='blue-ar-l-rn-none'>Donar 10 bsF</a>
					<script type="text/javascript">
					(function(){function $MPC_load(){window.$MPC_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;})();}window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})();
					</script>
				</div>
				<div class="text-center">
					<a mp-mode="dftl" href="https://www.mercadopago.com/mlv/checkout/start?pref_id=213149413-9beaacb4-1730-410b-88c1-ddaed50ee284" name="MP-payButton" class='blue-ar-l-rn-none'>Donar 20 bsF</a>
					<script type="text/javascript">
					(function(){function $MPC_load(){window.$MPC_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;})();}window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})();
					</script>
				</div>
				<div class="text-center">
					<a mp-mode="dftl" href="https://www.mercadopago.com/mlv/checkout/start?pref_id=213149413-fbc279af-b7b9-4269-bf51-db21e1e25a74" name="MP-payButton" class='blue-ar-l-rn-none'>Donar 50 bsF</a>
					<script type="text/javascript">
					(function(){function $MPC_load(){window.$MPC_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;})();}window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})();
					</script>
				</div>
				<div class="text-center">
					<a mp-mode="dftl" href="https://www.mercadopago.com/mlv/checkout/start?pref_id=213149413-cd216a68-84f0-4505-8efd-b4fa09102fd9" name="MP-payButton" class='blue-ar-l-rn-none'>Donar 100 bsF</a>
					<script type="text/javascript">
					(function(){function $MPC_load(){window.$MPC_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;})();}window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})();
					</script>
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
			<div class="col-sm-6 col-md-3 text-center"><br><button onclick="JavaScript:obtenerVideo('{{ url($movie->id.'/video/1') }}')" class="button-p">Ver Trailer</button></div>

			@if($movie->completa=='SI')
				<div class="col-sm-6 col-md-3 text-center"><br><button onclick="JavaScript:obtenerVideo('{{ url($movie->id.'/video/2') }}')" class="button-p">Ver en UpTobox</button></div>
			@endif

			@if($movie->completa=='SI')
				<div class="col-sm-6 col-md-3 text-center"><br><button onclick="JavaScript:obtenerVideo('{{ url($movie->id.'/video/3') }}')" class="button-p">Ver en TheVideos</button></div>
			@endif()

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

				@if($movie->uploaded <> ' ')
					<a target="_blank" class="button-def" href="http://adf.ly/11273555/http://adf.ly/11273555/{{ $movie->uploaded }}" rel="nofollow">Uploaded</a>
				@endif

				@if($movie->turbobit <> ' ')
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
