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
				<div class="col-md-2"></div>
				<div class="col-md-6" style="-webkit-box-shadow: 0 0px 22px 0 rgba(0, 0, 0, 0.1);box-shadow: 0 0px 22px 0 rgba(0, 0, 0, 0.1);margin: 0 0 60px;">
					<article >
							<br>
							<form>
							  <div class="form-group">
								<h1>Acesso ao cliente</h1>
								<label for="exampleInputEmail1">Email</label>
								<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entre com o email">
								<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
							  </div>
							  <div class="form-group">
								<label for="exampleInputPassword1">Senha</label>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
							  </div>
							  <div class="form-group form-check">
								<input type="checkbox" class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1">Check me out</label>
							  </div>
							  <button type="submit" class="btn btn-primary">Entrar</button>
							</form>
							
					</article>
				</div>
				<div class="col-md-2"></div>
		
					
			<br>
			<br>
						<!--</footer>-->
		</article>
	</div>
</section>
@endsection
</body>