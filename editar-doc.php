<br>
<h1>Editar Documentação</h1>
<br>

<?php

include("config.php");

$sqlBuscar = "SELECT * FROM documentacao 
                WHERE id_doc=" . $_REQUEST["id_doc"];

$res = mysqli_query($conexao, $sqlBuscar) or die($conexao->error);

$row = $res->fetch_object();

?>

<form action="?page=salvar-doc" method="POST" id="formCSS">
    <input type="hidden" name="acao" value="editar">

    <input type="hidden" name="id_doc" value="<?php print $row->id_doc; ?>">
    <div class="form-group">
        <label>Consulta(s)</label>
        <?php
        $sqlBuscar2 = "SELECT * FROM consulta";

        $res2 = mysqli_query($conexao, $sqlBuscar2) or die($conexao->error);

        $qtd2 = $res2->num_rows;

        if ($qtd2 > 0) {
            print "<select name='consulta_id_consult' class='form-control'>";
            print "<option> Selecione a Consulta </option>";
            while ($row2 = $res2->fetch_object()) {
                print "<option value='" . $row2->id_consult . "' " . ($row2->id_consult == $row->consulta_id_consult ? "selected" : "") . ">" . $row2->id_consult . "</option>";
            }
            print "</select>";
        } else {
            print "<div class='alert alert-danger'>Não há nenhum resultado</div>";
        }
        ?>

        <div class="form-group">
            <br>
            <label>Tipo de Documentação</label>
            <input type="text" id="tipo_doc" name="tipo_doc" class="form-control" value="<?php print $row->tipo_doc; ?>">
        </div>

        <div class="form-group">
            <br>
            <label>Data da Documentação</label>
            <input type="date" id="data_doc" name="data_doc" class="form-control" value="<?php print $row->data_doc; ?>">
        </div>

        <div class="form-group">
            <br>
            <label>Hora da Emissão da Documentação</label>
            <input type="time" id="hora_doc" name="hora_doc" class="form-control" value="<?php print $row->hora_doc; ?>">
        </div>

        <div class="form-group">
            <br>
            <label>Descrição da Documentação</label>
            <input type="text" id="desc_doc" name="desc_doc" class="form-control" value="<?php print $row->desc_doc; ?>">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
</form>