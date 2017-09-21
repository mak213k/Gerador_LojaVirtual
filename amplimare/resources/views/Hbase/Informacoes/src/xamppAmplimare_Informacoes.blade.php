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
					<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
						<div class="navbar-header">
							 
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
							</button> <a class="navbar-brand" href="#"><img class="logoMark" alt="Amplimare" title="Amplimaré, amplie seu prazer." src="assets/Img_Home/LogoMarcaNomeAmplimare.jpg"/></a>
						</div>
						
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							
							<ul class="nav navbar-nav" id="myTab">
							
							
								<li id="liHome">
									<a href="\Index" >Home</a>
								</li>
								<li class="Active" id="liInformacoes">
									<a href="\Informacoes" >Informações</a>
								</li>
								<li id="liProdutos">
									<a href="\Produtos">Produtos</a>
								</li>
								<li id="liContato">
									<a href="\Contato">Contato</a>
								</li>
								<li id="liSobre">
									<a href="\Sobre">Sobre</a>
								</li>
							
							</ul>
							<form class="navbar-form navbar-left" role="search">
								<div class="form-group">
									<input type="search" class="form-control">
								</div> 
								<button type="submit" class="btn btn-default">
									Submit
								</button>
							</form>
							<ul class="nav navbar-nav navbar-right">
								<li>
									<a href="#">Link</a>
								</li>
								<li class="dropdown">
									 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
									<ul class="dropdown-menu">
										<li>
											<a href="#">Action</a>
										</li>
										<li>
											<a href="#">Another action</a>
										</li>
										<li>
											<a href="#">Something else here</a>
										</li>
										<li class="divider">
										</li>
										<li>
											<a href="#">Separated link</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</nav>
			</header>
		</div>
</div>	
<body>
<br>
<br>
<hr>
<br>
<br>
	<div class="container-fluid">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<article>
				<!--É o mapa que exibe o endereço da fábrica-->
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3658.9390708332144!2d-46.551418!3d-23.498704!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5f91d03bfe55%3A0x1ad6190ba501de85!2sAv.+Guarulhos+-+Gopouva%2C+Guarulhos+-+SP%2C+Brasil!5e0!3m2!1spt-BR!2sbr!4v1480826905520" width="700" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<!--<img src="assets/Img_Home/LogoMarcaAmplimare.jpg" style="float: left">-->
				<br>
				<!--Início do conteúdo da página-->
				<h1 style="float:center">
					  Sobre a empresa
				</h1>
				<br>
				<hr>
				<br>
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
		  <div class="col-md-12">
			
		  </div>
		</div>
  </body>