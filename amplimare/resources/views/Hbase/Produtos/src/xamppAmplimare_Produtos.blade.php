<!-- 
#Número do Projeto: 002
#Nome do Projeto: Site de divulgação e vendas da Amplimaré
#Autor:Mayko Rodrigues Ribeiro da Costa
-->

@extends('padrao.Layout')

section('content')
<div class="container-fluid" style="background-color:#ffffff">
		<div class="col-md-12">
			<header id="navbar">
					<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
						<div class="navbar-header">
							 
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
							</button> <a class="navbar-brand" href="#"><img class="logoMark" alt="Amplimare" title="Amplimaré, amplie seu prazer." src="assets/Img_Home/LogoMarcaNomeAmplimare.jpg" align="center"/></a>
						</div>
						
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							
							<ul class="nav navbar-nav" id="myTab">
							
							
								<li id="liHome">
									<a href="\Index" >Home</a>
								</li>
								<li id="liInformacoes">
									<a href="\Informacoes" >Informações</a>
								</li>
								<li class="Active" id="liProdutos">
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
<br>
<hr>
<br>
<body>

<div class="row">

	<article class="main" id="main">
	
		<div class="container-fluid" style="background-color:#ffffff" id="produtos">
		
			<h1 align="center">
						  Produtos Mais vendidos
			</h1>
			<br>
			<hr>
			<br>
			<!-- <img src="assets/Img_Home/LogoMarcaAmplimare.jpg" style="float:left" /> -->

						
				<aside class="col-md-4 sidebar" id="espaco_esquerdo">
					<ul class="nav nav-pills nav-stacked" id="sidebar">
					  <li class="active"><a href="#">Home</a></li>
					  <li><a href="#">Menu 1</a></li>
					  <li><a href="#">Menu 2</a></li>
					  <li><a href="#">Menu 3</a></li>
					  <li><a href="#">Menu 4</a></li>
					  <li><a href="#">Menu 5</a></li>
					</ul>
				</aside>
				
			<section class="col-md-8">
							
				<section class="container-fluid">
									<div class="col-md-4">
											<img alt="Bootstrap Thumbnail Third" src="http://luxinhos.com.br/galeria/Luxinhos%20(36).JPG" class="img-responsive img-rounded"  id="gal" />
											<h3>thumbnail</h3>
									</div>
	
									<div class="col-md-4">
											<img alt="Bootstrap Thumbnail Third" src="http://luxinhos.com.br/galeria/Luxinhos%20(36).JPG" class="img-responsive img-rounded" id="gal" >
											<h3>thumbnail</h3>
									</div>
									<div class="col-md-4">
											<img alt="Bootstrap Thumbnail Third" src="http://luxinhos.com.br/galeria/Luxinhos%20(36).JPG" class="img-responsive img-rounded" id="gal" >
												<h3>thumbnail</h3>
									</div>
									<div class="col-md-4">
											<img alt="Bootstrap Thumbnail Third" src="http://luxinhos.com.br/galeria/Luxinhos%20(36).JPG" class="img-responsive img-rounded" id="gal" >
												<h3>thumbnail</h3>
									</div>
									<div class="col-md-4">
											<img alt="Bootstrap Thumbnail Third" src="http://luxinhos.com.br/galeria/Luxinhos%20(36).JPG" class="img-responsive img-rounded" id="gal" >
												<h3>thumbnail</h3>
									</div>
									<div class="col-md-4">
											<img alt="Bootstrap Thumbnail Third" src="http://luxinhos.com.br/galeria/Luxinhos%20(36).JPG" class="img-responsive img-rounded" id="gal" >
												<h3>thumbnail</h3>
									</div>
									<div class="col-md-4">						
											<img alt="Bootstrap Thumbnail Third" src="http://luxinhos.com.br/galeria/Luxinhos%20(36).JPG" class="img-responsive img-rounded" id="gal" >
												<h3>thumbnail</h3>
									</div>
									<div class="col-md-4">

											<img alt="Bootstrap Thumbnail Third" src="http://luxinhos.com.br/galeria/Luxinhos%20(36).JPG" class="img-responsive img-rounded" id="gal" >
												
												<h3>thumbnail</h3>
									</div>							
									<div class="col-md-4">

											<img alt="Bootstrap Thumbnail Third" src="http://luxinhos.com.br/galeria/Luxinhos%20(36).JPG" class="img-responsive img-rounded" id="gal" >
												<h3>thumbnail</h3>
									</div>	
				</section>
				<!--			
				<aside class="col-md-2" id="espaco_direito">
					// cria espaço do lado esquerdo
				</aside> -->
			</section>
		
		</div>
		
	</article>
	
</div>

	
	<div class="col-md-8">

					
					<br>
					<br>
					<br>
					<hr>
					<br>
					<br>	
						
	</div>

	<!--</footer> Adicionei o pluguin-->					

</body>