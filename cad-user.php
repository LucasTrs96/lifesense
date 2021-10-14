<br>
<h1>Cadastrar Usuário</h1>
<br>
<form action="?page=salvar-user" method="POST" id="formCSS">
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
        <label>Cargo</label>
        <input type="text" id="cargo_user" name="cargo_user" class="form-control" placeholder="Cargo" required>
    </div>

    <div class="form-group">
        <label>Login</label>
        <input type="text" id="login_user" name="login_user" class="form-control" placeholder="Login de Acesso" required>
    </div>

    <div class="form-group">
        <label>Senha</label>
        <input type="text" id="senha_user" name="senha_user" class="form-control" placeholder="Senha" required>
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