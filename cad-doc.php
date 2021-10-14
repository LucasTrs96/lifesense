<br>
<h1>Cadastrar Documentação</h1>
<br>
<form action="?page=salvar-doc" method="POST" id="formCSS">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="form-group">
        <label>Consulta(s)</label>
        <?php
        $sqlBuscar = "SELECT * FROM consulta";

        $res = mysqli_query($conexao, $sqlBuscar) or die($conexao->error);

        $qtd = $res->num_rows;

        if ($qtd > 0) {
            print "<select name='consulta_id_consult' class='form-control'>";
            print "<option> Selecione a Consulta  </option>";
            while ($row = $res->fetch_object()) {
                print "<option value='" . $row->id_consult . "'>" . $row->id_consult . "</option>";
            }
            print "</select>";
        } else {
            print "<div class='alert alert-danger'>Não há nenhuma Consulta cadastrado</div>";
        }
        ?>
    </div>

    <div class="form-group">
        <label>Tipo de Documentação</label>
        <input type="text" id="tipo_doc" name="tipo_doc" class="form-control" placeholder="Ex.: Relatório, Diagnóstico, Receita, Prontuário" required>
    </div>

    <div class="form-group">
        <label>Data da Documentação</label>
        <input type="date" id="data_doc" name="data_doc" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Hora de Emissão da Documentação</label>
        <input type="time" id="hora_doc" name="hora_doc" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Descrição</label>
        <input type="text" id="desc_doc" name="desc_doc" class="form-control" placeholder="Descrição da Documentação" required>
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