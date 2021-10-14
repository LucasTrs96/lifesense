<br>
<h1>Cadastrar Funcionário</h1>
<br>
<form action="?page=salvar-func" method="POST" id="formCSS">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="form-group">
        <label>Consultório(s)</label>
        <?php
        $sqlBuscar = "SELECT * FROM consultorio";

        $res = mysqli_query($conexao, $sqlBuscar) or die($conexao->error);

        $qtd = $res->num_rows;

        if ($qtd > 0) {
            print "<select name='consultorio_id_con' class='form-control'>";
            print "<option> Selecione o Consultório  </option>";
            while ($row = $res->fetch_object()) {
                print "<option value='" . $row->id_con . "'>" . $row->raz_con . "</option>";
            }
            print "</select>";
        } else {
            print "<div class='alert alert-danger'>Não há nenhum Consultório cadastrado</div>";
        }
        ?>
    </div>

    <div class="form-group">
        <label>C.P.F.</label>
        <input type="text" id="cpf_func" name="cpf_func" class="form-control" placeholder="Somente Números" maxlength="11" required>
    </div>

    <div class="form-group">
        <label>Nome do Funcionário</label>
        <input type="text" id="nome_func" name="nome_func" class="form-control" placeholder="Nome Completo" required>
    </div>

    <div class="form-group">
        <label>Data de Nascimento</label>
        <input type="date" id="nasc_func" name="nasc_func" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Nacionalidade</label>
        <input type="text" id="nac_func" name="nac_func" class="form-control" placeholder="Nacionalidade" required>
    </div>

    <div class="form-group">
        <label>Gênero</label>
        <input type="text" id="gen_func" name="gen_func" class="form-control" placeholder="Masculino, Feminino, Outros..." required>
    </div>

    <div class="form-group">
        <label>Ocupação</label>
        <input type="text" id="ocup_func" name="ocup_func" class="form-control" placeholder="Ocupação trabalhista" required>
    </div>

    <div class="form-group">
        <label>Endereço</label>
        <input type="text" id="end_func" name="end_func" class="form-control" placeholder="Cidade, Bairro, Rua, etc..." required>
    </div>

    <div class="form-group">
        <label>Telefone</label>
        <input type="text" id="tel_func" name="tel_func" class="form-control" placeholder="DDD + 9 ou telefone Fixo" required>
    </div>

    <div class="form-group">
        <label>E-mail</label>
        <input type="email" id="email_func" name="email_func" class="form-control" placeholder="E-mail" required>
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