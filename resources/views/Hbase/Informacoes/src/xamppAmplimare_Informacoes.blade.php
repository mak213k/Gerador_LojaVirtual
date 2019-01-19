<!-- 
#Número do Projeto: 002
#Nome do Projeto: Site de divulgação e vendas da Amplimaré
#Autor:Mayko Rodrigues Ribeiro da Costa
-->

@extends('padrao.Layout')

@section('content')
<div class="container-fluid" style="background-color:#ffffff">
		<div class="col-md-12">
					
				<header id="navbar">
	
					@extends('padrao.menuPrincipal')
			
				</header>
					
		</div>
</div>	

<body>

<br>
<br>
<br>
	<div class="container-fluid" id = "informacoes">
		
		<div class="col-md-3"></div>
		
		<div class="col-md-6">
			
			
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Informação</a></li>
		  </ol>
		</nav>
			
			
			<article>
			
				<!--Início do conteúdo da página-->
				<h1 style="float:center">
					  Informações sobre a empresa
				</h1>
				<br>
				<hr>
				<br>
				<br>
				<br>
			
				<!--É o mapa que exibe o endereço da fábrica-->
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3658.9390708332144!2d-46.551418!3d-23.498704!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5f91d03bfe55%3A0x1ad6190ba501de85!2sAv.+Guarulhos+-+Gopouva%2C+Guarulhos+-+SP%2C+Brasil!5e0!3m2!1spt-BR!2sbr!4v1480826905520" width="700" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<!--<img src="assets/Img_Home/LogoMarcaAmplimare.jpg" style="float: left">-->
				<br>
								
				 <blockquote>Esta empresa foi fundada com a inspiração na moda litoral do mundo inteiro numa compilação<br>
				 adaptada para o clima tropical do país. Desta forma conseguimos realçar o que tem de melhor na<br>
				beleza feminina com estilo e elegância. O melhor da moda em Paris e Milão em moda praia.<br>
				temos o melhor em biquini, maiôs, calças e blusinhas para você se destacar em qualquer ocasião.
				</blockquote>
				<br>
				<br>
				<br>
				<br>
				<address style="margin-left: 20px; float:right">
					<strong>Twitter, Inc.</strong><br> 795 Folsom Ave, Suite 600<br> San Francisco, CA 94107<br> <abbr title="Phone">P:</abbr> (123) 456-7890
				</address>
			</article>
		</div>
		
		<div class="col-md-3">
		</div>
			
						
	</div>

			<br>
			<br>
			<hr>
			<br>
			<br>
			
		<div class="row">
		 
		</div>
  </body>