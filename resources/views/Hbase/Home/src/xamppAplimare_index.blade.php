<!-- 
#Número do Projeto: 002
#Nome do Projeto: Site de divulgação e vendas da Amplimaré
#Autor:Mayko Rodrigues Ribeiro da Costa
-->
<?php 
$count = 0;
//var_dump($posts);exit();

?>
<style>
	.item{
		width:100%;
		height: 20em;
		max-width: 100%;
		max-height: 20em;
		text-align: center;
		display:flex;
	}
	p {
    	width: fit-content;
	}
	.post_description, .post_title{
		text-align: center;
	}
	.post_description{
		word-break: break-all;
	}
	img.img-responsive.img_content{
		height: 80%;
	}
</style>
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
									@foreach($sliders as $key => $slider)
									
									<?php 
										if($count == 0){
									?>

									<div class="item active">
										<img class="img-responsive" alt="Carousel Bootstrap Third" src="{{url('image', $slider->image)}}"  alt="" height="100" width="500" />
										<div class="carousel-caption">
											<h4>
												Third Thumbnail label
											</h4>
											<p>
												Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
											</p>
										</div>
									</div>

									<?php 

										}else{
									?>

									<div class="item">
										<img class="img-responsive" alt="Carousel Bootstrap Third" src="{{url('image', $slider->image)}}"  alt="" height="100" width="500" />
										<div class="carousel-caption">
											<h4>
												Third Thumbnail label
											</h4>
											<p>
												Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
											</p>
										</div>
									</div>

									<?php 			

										}
										
										$count++;	
									?>
									
									@endforeach

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

			@foreach($posts as $key => $post)
			
				<section class="col-md-4">
					<h2 class="post_title">
						{{$post->title}}
					</h2>
					<p class="post_description">
						{{$post->description}}
					</p>
					<p>
						<a class="btn" href="#">View details »</a>
					</p>
				</section>

			@endforeach
		</article>
		<br>
		<hr>
		<br>
		<br>
		<div class="col-md-12">
			<div class="col-md-6 text_section">
				<section>
					<h1>Título</h1>
					<br>
					<p>
						<center>
							Descrição para teste ASLDKLADKSAJDJAL LASKJDKLASJDKLASJDL LASLKASJKLDAJLKDJKLA
							Sasldjlaskjdklasj laskdlkasjdklasjDescrição para teste ASLDKLADKSAJDJAL 
							LASKJDKLASJDKLASJDL LASLKASJKLDAJLKDJKLA Sasldjlaskjdklasj laskdlkasjdklasj
							Descrição para teste ASLDKLADKSAJDJAL LASKJDKLASJDKLASJDL LASLKASJKLDAJLKDJKLA
							Sasldjlaskjdklasj laskdlkasjdklasjDescrição para teste ASLDKLADKSAJDJAL 
							LASKJDKLASJDKLASJDL LASLKASJKLDAJLKDJKLA Sasldjlaskjdklasj laskdlkasjdklasj
							Descrição para teste ASLDKLADKSAJDJAL LASKJDKLASJDKLASJDL LASLKASJKLDAJLKDJKLA
							Sasldjlaskjdklasj laskdlkasjdklasjDescrição para teste ASLDKLADKSAJDJAL 
							LASKJDKLASJDKLASJDL LASLKASJKLDAJLKDJKLA Sasldjlaskjdklasj laskdlkasjdklasj
							Descrição para teste ASLDKLADKSAJDJAL LASKJDKLASJDKLASJDL LASLKASJKLDAJLKDJKLA
							Sasldjlaskjdklasj laskdlkasjdklasjDescrição para teste ASLDKLADKSAJDJAL 
							LASKJDKLASJDKLASJDL LASLKASJKLDAJLKDJKLA Sasldjlaskjdklasj laskdlkasjdklasj
							Descrição para teste ASLDKLADKSAJDJAL LASKJDKLASJDKLASJDL LASLKASJKLDAJLKDJKLA
							Sasldjlaskjdklasj laskdlkasjdklasjDescrição para teste ASLDKLADKSAJDJAL 
							LASKJDKLASJDKLASJDL LASLKASJKLDAJLKDJKLA Sasldjlaskjdklasj laskdlkasjdklasj
							Descrição para teste ASLDKLADKSAJDJAL LASKJDKLASJDKLASJDL LASLKASJKLDAJLKDJKLA
							Sasldjlaskjdklasj laskdlkasjdklasjDescrição para teste ASLDKLADKSAJDJAL 
							LASKJDKLASJDKLASJDL LASLKASJKLDAJLKDJKLA Sasldjlaskjdklasj laskdlkasjdklasj
						</center>
					</p>
				</section>
			</div>
			<div class="col-md-6 img_section">
				<center>
					<img class="img-responsive img_content" alt="Carousel Bootstrap Third" src="https://img.freepik.com/fotos-gratis/mulher-jovem-e-elegante-magnifica-com-grandes-olhos-castanhos-e-um-sorriso-incrivel_291049-2572.jpg?t=st=1655432643~exp=1655433243~hmac=57210dff2e34f864691653c9231355a5a741d484a0b702092648774344630164"  alt="" height="100" width="500" style="" />
				</center>
			</div>
		</div>
		<hr>
		<br>
		@endsection
		
</body>