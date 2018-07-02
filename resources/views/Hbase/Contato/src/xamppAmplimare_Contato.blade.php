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
							
								<li  id="liHome">
									<a href="\Index" >Home</a>
								</li>
								<li id="liInformacoes">
									<a href="\Informacoes" >Informações</a>
								</li>
								<li id="liProdutos">
									<a href="\Produtos">Produtos</a>
								</li>
								<li class="Active" id="liContato">
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
	<br>
	<hr>
	<br>
	<br>
	
		<body>
			
			<section class="row">
				<article class="col-md-3"></article>
				<article class="col-md-6">
						<img src="assets/Img_Home/LogoMarcaAmplimare_160x160.jpg" style="float: left">
						<br>
						<br>
						<br>
						<h1>
							Contato WEB
						</h1>
						<br>
						<hr>
						<br>
						<br>
						<p style="padding-bottom: 20px; padding-top: 40px; text-align: justify; font-size:18px; left:1000px">
						Receba informações e promoções pelo e-mail.
						Amplimaré, sua moda praia.
						</p>
						
						<form name="contatoForm" id="contatoForm" method="post" action="/MailContato">
							
							{{ csrf_field() }} 
						<!--	{!! csrf_field() !!}	-->
					
						
							<div class="form-group">
								 
								<label for="nomeDoCliente">
									Nome
								</label>
								<input name="nomeDoCliente" type="text" class="form-control" id="nomeDoClienteCadastro" placeholder="É obrigatório digitar seu nome." />
							</div>
							<div class="form-group">
								 
								<label for="emailDoCliente" >
									Email address
								</label>
								<input type="email" name="emailDoCliente" class="form-control" id="exampleInputEmail1" placeholder="Insira seu e-mail." />
							</div>
							
							<div class="form-group">
							<label for="textoDoCliente" id="labelTextoDoCliente">
								Texto do email
							</label>
							<textarea name="textoDoCliente" rows="8" cols="89" placeholder="No máximo 712 caracteres."></textarea>					
							</div>
							<br>
							<br>
							<button type="submit" class="btn btn-default" style="float:left" value="Enviar">
								Submit
							</button>
							<span>
								                                                 
							</span>
							<button type="reset" class="btn btn-default" style="margin-left:20px" alt="Limpar o formulário para ser preenchido de novo.">
								Reset
							</button>
							
						</form>
						
							<script>
								$('#contatoForm').each(function(){
									this.reset();
								});
							</script>
						
						<address style="margin-left:20px; float:right; padding-top: 40px;">
							<strong>Twitter, Inc.</strong><br> 795 Folsom Ave, Suite 600<br> San Francisco, CA 94107<br> <abbr title="Phone">P:</abbr> (123) 456-7890
						</address>
				</article>
				<div class="col-md-3">
				</div>
						
									
			</section>
					<br>
					<br>
					<hr>
					<br>
				
						<!--<footer>-->
		@endsection
	</body>