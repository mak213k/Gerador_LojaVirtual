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

	<section class="row" id="Sobre">
	<div class="container-fluid" style="background-color:#ffffff;">
		<article>						
			<div class="row" id="row2">
				<div class="col-md-3"></div>
				<aside class="col-md-6" style="-webkit-box-shadow: 0 0px 22px 0 rgba(0, 0, 0, 0.1);box-shadow: 0 0px 22px 0 rgba(0, 0, 0, 0.1);margin: 0 0 60px;">
					<article >
							<br>
							<!--<img src="assets/Img_Home/LogoMarcaAmplimare.jpg" style="float: left">-->
							<h1>
								Artigo
							</h1>
							<br>
							<hr>
							<br>
							<br>
							<br>
							
							<p align="center">
								Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>
								. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. <br>Phasellus eu sem sapien, 
								sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. <br>Sed iaculis posuere diam ut cursus.<br> 
								<em>Morbi commodo sodales nisi id sodales. <br>Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus,
								id bibendum diam velit et dui.</em> <br>Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, 
								aliquam vel luctus eu, pharetra quis elit. <br> Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit . Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. 
								Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. 
								Sed iaculis posuere diam ut cursus.
								Morbi commodo sodales nisi id sodales. 
								Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui. 
								Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. 
								Nulla euismod ultrices massa, et feugiat ipsum consequat eu.
							</p> 
							<br>
							<br>
							
					</article>
				</aside>
				<div class="col-md-3"></div>
			
			</div>
			
				<div class="row">
				  <div class="col-sm-3">
					
				  </div>
				</div>
					
			<br>
			<hr>
			<br>
						<!--</footer>-->
		</article>
	</div>
</section>
@endsection
</body>