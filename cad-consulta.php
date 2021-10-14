<br>
<h1>Cadastrar Consulta</h1>
<br>
<form action="?page=salvar-consulta" method="POST" id="formCSS">
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

        <br>
        <label>Sala(s)</label>

        <?php

        $sqlBuscar2 = "SELECT * FROM sala";

        $res2 = mysqli_query($conexao, $sqlBuscar2) or die($conexao->error);

        $qtd2 = $res2->num_rows;

        if ($qtd2 > 0) {
            print "<select name='sala_id_sala' class='form-control'>";
            print "<option> Selecione a Sala  </option>";
            while ($row = $res2->fetch_object()) {
                print "<option value='" . $row->id_sala . "'>" . $row->espec_sala . "</option>";
            }
            print "</select>";
        } else {
            print "<div class='alert alert-danger'>Não há nenhum Consultório cadastrada</div>";
        }

        ?>

        <br>
        <label>Médico(s)</label>
        <?php
        $sqlBuscar3 = "SELECT * FROM medico";

        $res3 = mysqli_query($conexao, $sqlBuscar3) or die($conexao->error);

        $qtd3 = $res3->num_rows;

        if ($qtd3 > 0) {
            print "<select name='medico_id_med' class='form-control'>";
            print "<option> Selecione o Médico  </option>";
            while ($row = $res3->fetch_object()) {
                print "<option value='" . $row->id_med . "'>" . $row->nome_med . "</option>";
            }
            print "</select>";
        } else {
            print "<div class='alert alert-danger'>Não há nenhum Médico cadastrado</div>";
        }
        ?>

    </div>

    <div class="form-group">
        <label>Data da Consulta</label>
        <input type="date" id="data_consult" name="data_consult" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Hora da Consulta</label>
        <input type="time" id="hora_consult" name="hora_consult" class="form-control" required>
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