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
								<li id="liProdutos">
									<a href="\Produtos">Produtos</a>
								</li>
								<li id="liContato">
									<a href="\Contato">Contato</a>
								</li>
								<li class="Active" id="liSobre">
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
<br>
<hr>
<br>
<br>

<body>

	<section class="row" id="Sobre">
	<div class="container-fluid" style="background-color:#ffffff">
		<article>						
			<div class="row" id="row2">
				<div class="col-md-3"></div>
				<aside class="col-md-6">
					<article>
							<br>
							<img src="assets/Img_Home/LogoMarcaAmplimare.jpg" style="float: left">
							<h1>
								Informações sobre a empresa
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