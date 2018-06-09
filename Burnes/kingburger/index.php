<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>King Burger</title>
	<meta charset="utf-8">
	<meta name="description" content="A melhor hamburgueria de umuarama">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<base href="http://localhost/kingburger/">

	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
	<link rel="shortcut icon" href="images/logo.png">

	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

</head>
<body>
	<header>
		<nav>
			<a href="index.php" title="Home" class="logo">
				<img src="images/kingburger.png" title="kingburger" alt="kingburger">
			</a>

			<button type="button" id="menu">
				<i class="fas fa-bars"></i>
			</button>

			<ul>
				<li>
					<a href="index.php" title="Home">Home</a>
				</li>
				<li>
					<a href="sobre" title="sobre">Sobre</a>
				</li>
				<li>
					<a href="cardapio" title="Cardápio">Cardápio</a>
				</li>
				<li>
					<a href="contato" title="contato">Contato</a>
				</li>
			</ul>
		</nav>
		<div class="clear"></div>

		<div class="msg">
			<h1>Mega Max Burger</h1>
			<p>4 Hamburgueres de Carne + 4 Bacon Crocante</p>	
			<p><a href="cardapio" title="Cardápio" class="btn ">Cardápio</a></p>
		</div>

		<img src="images/10.png" alt="Mega Max Burger" title="Mega Max Burger" class="max">
	</header>


	<main>
		<?php
		if ( isset ( $_GET["p"] ) ){
			$p = $_GET["p"];
			
		} else {
			$p = "home";
		}
		$pagina = "paginas/".$p.".php";
		
		if ( file_exists( $pagina ) ){
			include $pagina;
		} else {
			include "paginas/404.php";
		}

		?>		
	</main> <div class="bacon"></div>
	<footer>
		<div class="container row">
			<div class="coluna">
				<h3>Menu de Acesso</h3>
				<ul>
					<li><a href="home" title="Home">Home</a></li>
					<li><a href="sobre" title="Sobre a King Burger">Sobre</a></li>
					<li><a href="cardapio" title="Cardápio">Cardápio</a></li>
					<li><a href="contato" title="Contao">Contato</a></li>
				</ul>
			</div>
				<div class="coluna borda">
				<div class="fb-page" data-href="https://www.facebook.com/professorburnes/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/professorburnes/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/professorburnes/">ProfessorBurnes</a></blockquote></div>
			</div>

			<div class="coluna borda">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.6648497272745!2d-53.315848449780674!3d-23.759328074741354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f2d40292269565%3A0x34c0ef5f4ffa7009!2sCol%C3%A9gio+e+Faculdade+ALFA+de+Umuarama!5e0!3m2!1spt-BR!2sbr!4v1521038515751" width="100%" height="215" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
		<p class="center" style="font: 23px;">
			Desenvolvido por Diogo vanderlan Ra: 6609 - Todos os Direitos Reservados
		</p>
	</footer>
	<div id="fb-root"></div>
		<script> (function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.12';
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));

		 type="text/javascript">
		$("#menu").click(function(){
			$("nav ul").toggle();
		})
	</script>
</body>
</html>
