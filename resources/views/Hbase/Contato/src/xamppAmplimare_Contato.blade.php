<!-- 
#Número do Projeto: 002
#Nome do Projeto: Site de divulgação e vendas da Amplimaré
#Autor:Mayko Rodrigues Ribeiro da Costa
-->

@extends('padrao.Layout')

@section('content')	

	<div class="container-fluid" id = "contato" style="background-color:#ffffff">
		<div class="col-md-12">
			<header id="navbar">
	
				@extends('padrao.menuPrincipal')

			</header>
		</div>
	</div>	
	
	
		<body>
			
			<section class="row">
				
				<div class="col-md-3">
				</div>
				
				<article class="col-md-6">
						<!--<img src="Img/LogoMarcaAmplimare_160x160.jpg" style="float: left">-->
						
						<nav aria-label="breadcrumb">
						  <ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item"><a href="#">Contato</a></li>
						  </ol>
						</nav>
						
						<br>
						<h1>
							Contato WEB
						</h1>
						<br>
						<hr>
						<br>
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
								Enviar
							</button>
							<span>
								                                                 
							</span>
							<button type="reset" class="btn btn-default" style="margin-left:20px" alt="Limpar o formulário para ser preenchido de novo.">
								Limpar
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