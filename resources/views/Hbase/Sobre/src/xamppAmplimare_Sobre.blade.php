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
	<div class="container-fluid" style="background-color:#ffffff">
	
		<article>						
			<div class="row" id="row2">
				<div class="col-md-3"></div>
				<aside class="col-md-6">
				
					
	
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Sobre</a></li>
		  </ol>
		</nav>
		
	
				
					<article>
							<br>
							<!--<img src="assets/Img_Home/LogoMarcaAmplimare.jpg" style="float: left">-->
							<h1>
								Sobre a empresa
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
							<img src="" alt="" style="float:right">
							<br>
							<br>
							<br><br><br><br>
							<address style="margin-left: 20px; float:right">
								 <strong>Twitter, Inc.</strong><br> 795 Folsom Ave, Suite 600<br> San Francisco, CA 94107<br> <abbr title="Phone">P:</abbr> (123) 456-7890
							</address>	
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