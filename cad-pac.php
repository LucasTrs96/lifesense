<br>
<h1>Cadastrar Paciente</h1>
<br>
<form action="?page=salvar-pac" method="POST" id="formCSS">
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
            print "<div class='alert alert-danger'>Não há nenhum Consultório cadastrada</div>";
        }
        ?>
    </div>

    <div class="form-group">
        <label>C.P.F.</label>
        <input type="text" id="cpf_pac" name="cpf_pac" value="cpf_pac" class="form-control" placeholder="Somente Números" maxlength="11" required>
    </div>

    <div class="form-group">
        <label>Nome do Paciente</label>
        <input type="text" id="nome_pac" name="nome_pac" value="nome_pac" class="form-control" placeholder="Nome Completo" required>
    </div>

    <div class="form-group">
        <label>Data de Nascimento</label>
        <input type="date" id="nasc_pac" value="nasc_pac" name="nasc_pac" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Nacionalidade</label>
        <input type="text" id="nac_pac" name="nac_pac" value="nac_pac" class="form-control" placeholder="Nacionalidade" required>
    </div>

    <div class="form-group">
        <label>Gênero</label>
        <input type="text" id="gen_pac" name="gen_pac" value="gen_pac" class="form-control" placeholder="Masculino, Feminino, Outros..." required>
    </div>

    <div class="form-group">
        <label>Ocupação</label>
        <input type="text" id="ocup_pac" name="ocup_pac" value="ocup_pac" class="form-control" placeholder="Ocupação trabalhista" required>
    </div>

    <div class="form-group">
        <label>Endereço</label>
        <input type="text" id="end_pac" name="end_pac" value="end_pac" class="form-control" placeholder="Cidade, Bairro, Rua, etc..." required>
    </div>

    <div class="form-group">
        <label>Telefone</label>
        <input type="text" id="tel_pac" name="tel_pac" value="tel_pac" class="form-control" placeholder="DDD + 9 ou telefone Fixo" required>
    </div>

    <div class="form-group">
        <label>E-mail</label>
        <input type="email" id="email_pac" name="email_pac" value="email_pac" class="form-control" placeholder="E-mail" required>
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