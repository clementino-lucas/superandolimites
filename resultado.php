<?php 

	require_once ("header.php"); 

	$data = $_GET['admissao'];
	$mes = $_GET['mes'];
	// $tempo = $_GET['tempo'];
	$ponto = $_GET['ponto'];
	$cargo = $_GET['cargo'];
	$vlrPonto = $_GET['vlrPonto'];
	$meta = $_GET['meta'];

	date_default_timezone_set('America/Sao_Paulo');
	$dataAtual = date('Y-m-d');
	$diferenca = strtotime($dataAtual) - strtotime($data);
	$anos = floor($diferenca / (60 * 60 * 24 * 365));
	/*echo $data."<br>";
	echo $mes."<br>";
	echo $tempo."<br>";
	echo $diferenca."<br>";
	echo $dias;*/

	switch ($cargo) {
		case 'Analista de Sistemas I':
			$vlrCargo = 6.86;
			break;
		case 'Analista de Sistemas II':
			$vlrCargo = 7.00;
			break;
		case 'Analista de Sistemas III':
			$vlrCargo = 8.09;
			break;
		default:
			$vlrCargo = 6.89;
			break;
	}

	$meusPontos = ($mes * $vlrCargo) + (($mes * $vlrCargo) * (($anos * $ponto) / 100));
	$gratBruto = (($meusPontos * $vlrPonto) * ($meta / 100));
	$fgts = $gratBruto * 0.08;
	$gratLiquido = $gratBruto - $fgts;

?>
<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h2 class="panel-title">Resultado do cálculo</h2>
		</div>
		<div class="panel-body">
			<div class="row container-fluid">
				<div class="form-group">
					<label for="">Meus pontos</label>
					<input type="text" class="form-control" value="<?php echo number_format($meusPontos,2); ?>">
				</div>
			</div>
			<div class="row container-fluid">
				<div class="form-group">
					<label for="">Gratificação Bruta</label>
					<input type="text" class="form-control" value="<?php echo "R$ ".number_format($gratBruto,2,',','.'); ?>">
				</div>
			</div>
			<div class="row container-fluid">
				<div class="form-group">
					<label for="">Valor FGTS (8%)</label>
					<input type="text" class="form-control" value="<?php echo "R$ ".number_format($fgts,2,',','.'); ?>">
				</div>
			</div>
			<div class="row container-fluid">
				<div class="form-group">
					<label for="">Gratificação Líquida</label>
					<input type="text" class="form-control" value="<?php echo "R$ ".number_format($gratLiquido,2,',','.'); ?>">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<a href="main.php" class="btn btn-warning">Voltar</a>
</div>
