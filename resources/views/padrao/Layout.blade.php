<!-- 
#Número do Projeto: 002
#Nome do Projeto: Site de divulgação e vendas da Amplimaré
#Autor:Mayko Rodrigues Ribeiro da Costa
-->

<!DOCTYPE html>
<html lang="en">

	<!--[if lt IE 9]>
		<script src="assets/corrigirParaBrowsersAntigos/html5shiv-master/dist/html5shiv.js"></script>
	<![endif]-->  

  <head>
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
			@section('title')
				<h2> Amplimaré, sua moda praia.</h2>
			@endsection
		</title>
		<meta name="description" content="Source code generated using layoutit.com">
	<meta name="Mayko Rodrigues" content="Cadastro simples de cliente!">
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.style.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
		
		
	
</head>

	<body class="body_layout">
		<div class="container-fluid">
		
		@yield('content')
		</div>
	</body>
	

<div class="row">
		<div class="col-md-12">
			<!--</footer>-->
			<article>
				<footer>
					<img src="assets/Img_Home/Footer3.jpg" alt="Rodapé de página" />
				</footer>
			</article>
		</div>
	</div>
	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
</html>