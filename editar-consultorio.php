<br>
<h1>Editar Consultório</h1>
<?php

	include("config.php");

	$sqlEditar = "SELECT * FROM consultorio 
			WHERE id_con=".$_REQUEST["id_con"];

	$res = mysqli_query($conexao, $sqlEditar) or die($conn->error);
	
	$row = $res->fetch_object();
?>
<form action="?page=salvar-consultorio" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_con" value="<?php print $row->id_con; ?>">
	
	<div class="form-group">
		<label>C.N.P.J</label>
		<input type="text" name="cnpj_con" class="form-control" value="<?php print $row->cnpj_con; ?>">
	</div>

	<div class="form-group">
		<label>Razão Social</label>
		<input type="text" name="raz_con" class="form-control" value="<?php print $row->raz_con; ?>">
	</div>

	<div class="form-group">
		<label>C.E.P.</label>
		<input type="text" name="cep_con" class="form-control" value="<?php print $row->cep_con; ?>">
	</div>

	<div class="form-group">
		<label>Endereço</label>
		<input type="text" name="end_con" class="form-control" value="<?php print $row->end_con; ?>">
	</div>

	<div class="form-group">
		<label>Telefone</label>
		<input type="text" name="tel_con" class="form-control" value="<?php print $row->tel_con; ?>">
	</div>

	<div class="form-group">
		<label>E-mail</label>
		<input type="text" name="email_con" class="form-control" value="<?php print $row->email_con; ?>">
	</div>
	
	<div class="form-group">
		<button type="submit" class="btn btn-success">Salvar</button>
	</div>
</form>