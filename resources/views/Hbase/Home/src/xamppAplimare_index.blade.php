<!-- 
#Número do Projeto: 002
#Nome do Projeto: Site de divulgação e vendas da Amplimaré
#Autor:Mayko Rodrigues Ribeiro da Costa
-->

@extends('padrao.Layout')

@section('content')	
	
<header class="container-fluid" style="background-color:#ffffff">
	
		@extends('padrao.menuPrincipal')

</header>
<br>
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
					
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
				<li class="breadcrumb-item active" aria-current="page">Home</li>
			  </ol>
			</nav>
					
						<div class="carousel slide carousel-fade" data-ride="carousel" id="carousel-146453">
							
								<div class="carousel-inner">
									<div class="item active">
										<img class="img-responsive" alt="Carousel Bootstrap First" src="Img/HbaseImg/Img_home/adult-beautiful-bed-1076446.jpg" alt="" height="100" width="500" />
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
										<img class="img-responsive" alt="Carousel Bootstrap Second" src="Img/HbaseImg/Img_home/asian-beautiful-beauty-868849.jpg" alt="" height="100" width="500" />
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
										<img class="img-responsive" alt="Carousel Bootstrap Third" src="Img/HbaseImg/Img_home/pexels-photo-428321.jpeg" alt="" height="100" width="500" />
										<div class="carousel-caption">
											<h4>
												Third Thumbnail label
											</h4>
											<p>
												Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
											</p>
										</div>
									</div>
								</div> 
								<a class="left carousel-control" href="#carousel-146453" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> 
								<a class="right carousel-control" href="#carousel-146453" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
							
						</div>
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