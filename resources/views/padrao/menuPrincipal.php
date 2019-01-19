<?php 

//$basePath = ('/Framework/Laravel/Amplimare_LojaVirtual/public');
$basePath = '';

/**
class="Active"

$ativar = Route::current();

switch($ativar){
	
	case "\/":
	echo "home";
	
	case "/Informacoes":
	echo "";
	
	case "/Contato":
	echo "";
	
	case "/Produtos":
	echo "";
	
	case "/Sobre":
	echo "";
}
**/

?>

<header class="container-fluid" style="background-color:#ffffff">
	<section class="col-md-12">
		<div id="navbar">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="#"><img class="logoMark" alt="Amplimare" title="Amplimaré, amplie seu prazer." src="Img\LogoMarcaNomeAmplimare.jpg" align="center"/></a>
				</div>
					
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						
						<ul class="nav navbar-nav" id="myTab">
						
						
							<li id="liHome">
								<a href="<?php echo $basePath ?>\" data-toggle="tooltip" title="Página inicial">Home</a>
							</li>
							<li id="liInformacoes">
								<a href="<?php echo $basePath ?>\Informacoes" data-toggle="tooltip" title="Informações sobre a empresa e localidade">Informações</a>
							</li>
							<li id="liProdutos">
								<a href="<?php echo $basePath ?>\Produtos" data-toggle="tooltip" title="Página de escolha dos produtos">Produtos</a>
							</li>
							<li id="liContato">
								<a href="<?php echo $basePath ?>\Contato" data-toggle="tooltip" title="Contato via e-mail">Contato</a>
							</li>
							<li id="liSobre">
								<a href="<?php echo $basePath ?>\Sobre" data-toggle="tooltip" title="Informações sobre a empresa e histórico">Sobre</a>
							</li>
							
						</ul>
						<form class="navbar-form navbar-left" role="search">
							<div class="form-group">
								<input type="search" class="form-control">
							</div> 
							<button type="submit" class="btn btn-default" data-toggle="tooltip" title="Escreva a palavra e clique aqui para pesquisar">
								Pesquisar
							</button>
						</form>
						
						<ul class="nav navbar-nav navbar-right">
						  <li><a href="#"><span class="glyphicon glyphicon-shopping-cart" style="font-size:20px" data-toggle="tooltip" title="Carrinho de compras"></span></a></li>
						  <li><a href="#"><span class="glyphicon glyphicon-user" style="font-size:20px" data-toggle="tooltip" title="Minha conta"></span></a></li>
						  <li><a href="#"><span class="glyphicon glyphicon-log-in" style="font-size:20px" data-toggle="tooltip" title="Entrar"></span></a></li>
						</ul>
						
						<ul class="nav navbar-nav navbar-right">
							<!--
							<li>
								<a href="#">Link</a>
							</li>
							-->
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


<script>

	//class="Active"
	
	//var ativar = document.getElementsByClassName("container-fluid");

</script>