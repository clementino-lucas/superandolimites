<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Superando Limites</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery-1.11.3.min.js"></script>
		<script>
			function formatar(mascara,documento) {
				var i = documento.value.length;
				var saida = mascara.substring(0,1);
				var texto = mascara.substring(i);
				if(texto.substring(0,1) != saida) {
					documento.value += texto.substring(0,1);
				}
			}
		</script>
	</head>
	<body>
	<?php 
		require_once ("contador.php");
		if (isset($_COOKIE['counte'])) {
			$counte = $_COOKIE['counte'] + 1;
		} else {
			$counte = 1;
			$a++;
		}
		setcookie('counte','$counte',time()+3700);
		$abre = @fopen("contador.php", "w");
		$ss = '<?php $a = '.$a.'; ?>';
		$escreve = fwrite($abre, $ss);
	?>
	<nav class="navbar navbar-inverse" id="inicio">
		<div class="container">
			<div class="navbar-header">
				<a href="main.php" class="navbar-brand">Superando Limites</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="#calculo">Calcular</a></li>
					<li><a href="#">Sair</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- <div class="container"> -->
