<!-- 

-->
<?php
	
	use Illuminate\Http\Request;
	
	/**
     * Send an e-mail reminder to the user.
     * Project: Loja virtual para venda de roupas
     * Author:Mayko Rodrigues
     * #Número do Projeto: 002
	 * #Nome do Projeto: Site de divulgação e vendas da Amplimaré
	 * #Autor:Mayko Rodrigues Ribeiro da Costa
     * 
     */
	 
	$consumer = $_POST['nomeDoCliente'];
	$email = $_POST['emailDoCliente'];
	$message = $_POST['textoDoCliente'];
	$to = 'mak213k@yahoo.com.br';
	$subject='pedido';
	
	$headers = "From: $to,\r\n" .
            "Reply-To: $email\r\n" .
            "X-Mailer: PHP/" . "phpversion()" . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; <meta charset=utf-8>\r\n";
		
	mail($to, $subject, $message, $headers);
	
	$screen = "
		
		<html>
			<title>Sucesso!!!</title>
				<head>
					<meta charset= &quot;utf8&quot; >
					<link rel=&quot;stylesheet&quot; href=&quot;{{ asset('assets/css/bootstrap.min.style.css') }}&quot;>
					<link rel=&quot;stylesheet&quot; href=&quot;{{ asset('assets/css/bootstrap.min.css') }}&quot;>
					<link rel=&quot;stylesheet&quot; href=&quot;{{ asset('assets/css/style.css') }}&quot>
				</head>
			<body>
			
				Email mandado com sucesso!!!!!
				
				
				
			</body>
			<script src=&quot;{{ asset('assets/js/jquery.min.js') }}&quot;></script>
			<script src=&quot;{{ asset('assets/js/bootstrap.min.js') }}&quot;></script>
			<script src=&quot;{{ asset('assets/js/scripts.js') }}&quot;></script>
		</html>	";
				
	echo $screen;
	
	$var = "<script>javascript:history.back(-1)</script>";
	echo $var;
	
		/*
        Mail::send('Hbase.Contato.src.Contato', $data , function ($m) use ($user) {
            $m->from($email, 'Your Application');

            $m->to('mak213k@yahoo.com.br', $user->name)->subject('Pedido de'.$consumer);
        });
		*/
		
?>			
		