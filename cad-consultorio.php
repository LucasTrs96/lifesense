<br>
<h1>Cadastrar Consultório</h1>

<?php
	include("config.php");
?>

<form action="?page=salvar-consultorio" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="form-group">
		<label>C.N.P.J.</label>
		<input type="text" id="cnpj_con" name="cnpj_con" class="form-control" placeholder="Somente Números" maxlentgh="13" required>
	</div>

	<div class="form-group">
		<label>Razão Social</label>
		<input type="text" id="raz_con" name="raz_con" class="form-control" placeholder="Ex.: Consultório Life SENSE" required>
	</div>

	<div class="form-group">
		<label>C.E.P.</label>
		<input type="text" id="cep_con" name="cep_con" class="form-control" placeholder="Somente Números" maxlentgh="11" required>
	</div>

	<div class="form-group">
		<label>Endereço</label>
		<input type="text" id="end_con" name="end_con" class="form-control" placeholder="Ex.: Cidade, Bairro, Casa, Número, etc..." required>
	</div>

	<div class="form-group">
		<label>Telefone</label>
		<input type="text" id="tel_con" name="tel_con" class="form-control" placeholder="DDD + 9" required>
	</div>

	<div class="form-group">
		<label>E-mail</label>
		<input type="email" id="email_con" name="email_con" placeholder="Ex.: email@email.com" class="form-control" required>
	</div>

	<div class="row">
        <div class="col-lg-10 col-sm-12 mb-3 form-check">
            <input type="checkbox" name="termos" id="termos" class="form-check-input" required>
            <label for="termos" class="form-check-label">
                <a href="termo-de-uso.php" target="_blank">Termos de Uso</a>
            </label>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-10 col-sm-12 mb-3 form-check">
            <input type="checkbox" name="termos" id="termos" class="form-check-input" required>
            <label for="termos" class="form-check-label">
                <a href="termo-privacidade.php" target="_blank">Termos de Privacidade</a>
            </label>
        </div>
    </div>

	<div class="form-group">
		<button type="submit" class="btn btn-success">Cadastrar</button>
	</div>
</form>