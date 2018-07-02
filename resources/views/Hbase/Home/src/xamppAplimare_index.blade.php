<!-- 
#Número do Projeto: 002
#Nome do Projeto: Site de divulgação e vendas da Amplimaré
#Autor:Mayko Rodrigues Ribeiro da Costa
-->

@extends('padrao.Layout')

@section('content')	
	
<header class="container-fluid" style="background-color:#ffffff">
	<section class="col-md-12">
		<div id="navbar">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="#"><img class="logoMark" alt="Amplimare" title="Amplimaré, amplie seu prazer." src="assets/Img_Home/LogoMarcaNomeAmplimare.jpg" align="center"/></a>
				</div>
					
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						
						<ul class="nav navbar-nav" id="myTab">
						
						
							<li class="Active" id="liHome">
								<a href="\Index" >Home</a>
							</li>
							<li id="liInformacoes">
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
		</div>	
	</section>
</header>
<br>
<br>
<hr>
<br>
<br>			
<body>

			<article class="container-fluid" id="Home">
				<section class="row">
					<article class="col-md-3" class="propagandas-na-direita">
						<!--Div para colocar propagandas ou bloco de dados na esquerda como pesquisa-->
						<span class="block"></span>
					</article>
			
					<section class="col-md-6">
						<article class="carousel slide" id="carousel-146453">
							<ol class="carousel-indicators">
								<li class="active" data-slide-to="0" data-target="#carousel-146453">
								</li>
								<li data-slide-to="1" data-target="#carousel-146453">
								</li>
								<li data-slide-to="2" data-target="#carousel-146453">
								</li>
							</ol>
							<div class="carousel-inner">
								<div class="item active">
									<img class="img-responsive" alt="Carousel Bootstrap First" src="assets/Img_Home/Anuncios/BiquiniDeOncaRosaPublicidade677X679.jpg" />
									<div class="carousel-caption">
										<h4>
											First Thumbnail label
										</h4>
										<p>
											Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
										</p>
									</div>
								</div>
								<div class="item">
									<img class="img-responsive" alt="Carousel Bootstrap Second" src="assets/Img_Home/Anuncios/BiquiniRoxoVermelhoPublicidade677X679.jpg" />
									<div class="carousel-caption">
										<h4>
											Second Thumbnail label
										</h4>
										<p>
											Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
										</p>
									</div>
								</div>
								<div class="item">
									<img class="img-responsive" alt="Carousel Bootstrap Third" src="assets/Img_Home/Anuncios/GiovannaAmplimare677X679.jpg" />
									<div class="carousel-caption">
										<h4>
											Third Thumbnail label
										</h4>
										<p>
											Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
										</p>
									</div>
								</div>
							</div> <a class="left carousel-control" href="#carousel-146453" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-146453" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
						</article>
					</section>
					<article class="col-md-3" class="propagandas-na-esquerda>
						<!--Div para colocar propagandas ou bloco de dados na esquerda como pesquisa-->
						<span class="block" ></span>
					</article>
				</section>
			</article>
		
		<br>
		<hr>
		<br>
		
		<article class="row">
			<section class="col-md-4">
				<h2>
					Heading
				</h2>
				<p>
					Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
				</p>
				<p>
					<a class="btn" href="#">View details »</a>
				</p>
			</section>
			<section class="col-md-4">
				<h2>
					Heading
				</h2>
				<p>
					Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
				</p>
				<p>
					<a class="btn" href="#">View details »</a>
				</p>
			</section>
			<section class="col-md-4">
				<h2>
					Heading
				</h2>
				<p>
					Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
				</p>
				<p>
					<a class="btn" href="#">View details »</a>
				</p>
			</section>
		</article>
		<br>
		<hr>
		<br>
		@endsection
</body>