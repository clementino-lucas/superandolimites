<?php require_once ("header.php") ?>

<div class="container">
	<div class="jumbotron col-xs-12 col-sm-12 col-md-12">
		<h1>Bem-vindo ao Superando Limites</h1>
		<p>Saiba quanto será aproximadamente o valor do seu PL no programa Superando Limites da Softplan</p>
	</div>
</div>
<div class="container">
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
<div class="container" id="calculo">
	<h1>Como calcular o valor?</h1><hr>
	<?php 
		$cargo = array(1=>"Analista de Sistemas I",2=>"Analista de Sistemas II",3=>"Analista de Sistemas III");
	?>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h2 class="panel-title">Cálculo do valor</h2>
		</div>
		<div class="panel-body">
			<form action="resultado.php">
				<div class="row container-fluid">
					<div class="form-group col col-md-3">
						<label for="">Admissão</label>
						<input type="date" class="form-control" name="admissao">
					</div>
					<div class="form-group col col-md-3">
						<label for="">Meses apuração</label>
						<input type="text" class="form-control text-right" name="mes">
					</div>
					<div class="form-group col col-md-3">
						<label for="">% por Ano</label>
						<input type="text" class="form-control text-right" name="ponto">
					</div>
				</div>
				<div class="row container-fluid">
					<div class="form-group col col-md-6">
						<label for="">Cargo</label>
						<select class="form-control" name="cargo">
							<?php foreach ($cargo as $carg) : ?>
								<option value="<?php echo "$carg"; ?>"><?php echo $carg; ?></option>
								<!-- <option value="A2">Analista de Suporte II</option>
								<option value="A3">Analista de Suporte III</option> -->
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group col col-md-3">
						<label for="">Valor do ponto</label>
						<input type="text" class="form-control text-right" name="vlrPonto">
					</div>
					<div class="form-group col col-md-3">
						<label for="">Meta atingida</label>
						<input type="text" class="form-control text-right" name="meta">
					</div>
				</div>
				<div class="container-fluid">
					<button type="submit" class="btn btn-primary">Calcular</button>
					<button type="reset" class="btn btn-danger">Cancelar</button>
				</div>
			</form>
			<div class="container-fluid">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>CARGO</th>
							<th>VALOR</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Analista de Suporte I</td>
							<td>6,86</td>
						</tr>
						<tr>
							<td>Analista de Suporte II</td>
							<td>7,00</td>
						</tr>
						<tr>
							<td>Analista de Suporte III</td>
							<td>8,09</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="container">
<a href="main.php" class="btn btn-default">Voltar ao topo</a>
</div>
<footer class="footer">
	<div class="container">
		<h3><?php echo "<br>$a Visitas" ?></h3>
	</div>
</footer>
</body>
</html>
