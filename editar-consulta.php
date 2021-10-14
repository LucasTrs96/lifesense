<br>
<h1>Editar Consulta</h1>
<br>

<?php

include("config.php");

$sqlBuscar = "SELECT * FROM consulta 
                WHERE id_consult=" . $_REQUEST["id_consult"];

$res = mysqli_query($conexao, $sqlBuscar) or die($conexao->error);

$row = $res->fetch_object();

?>

<form action="?page=salvar-consulta" method="POST" id="formCSS">
    <input type="hidden" name="acao" value="editar">

    <input type="hidden" name="id_consult" value="<?php print $row->id_consult; ?>">
    <div class="form-group">
        <label>Consultório</label>
        <?php
        $sqlBuscar2 = "SELECT * FROM consultorio";

        $res2 = mysqli_query($conexao, $sqlBuscar2) or die($conexao->error);

        $qtd2 = $res2->num_rows;

        if ($qtd2 > 0) {
            print "<select name='consultorio_id_con' class='form-control'>";
            print "<option> Selecione o Consultório </option>";
            while ($row2 = $res2->fetch_object()) {
                print "<option value='" . $row2->id_con . "' " . ($row2->id_con == $row->consultorio_id_con ? "selected" : "") . ">" . $row2->raz_con . "</option>";
            }
            print "</select>";
        } else {
            print "<div class='alert alert-danger'>Não há nenhum resultado</div>";
        }
        ?>

        <br>
        <label>Sala</label>
        <?php
        $sqlBuscar3 = "SELECT * FROM sala";

        $res3 = mysqli_query($conexao, $sqlBuscar3) or die($conexao->error);

        $qtd3 = $res3->num_rows;

        if ($qtd3 > 0) {
            print "<select name='sala_id_sala' class='form-control'>";
            print "<option> Selecione a Sala </option>";
            while ($row3 = $res3->fetch_object()) {
                print "<option value='" . $row3->id_sala . "' " . ($row3->id_sala == $row->sala_id_sala ? "selected" : "") . ">" . $row3->espec_sala . "</option>";
            }
            print "</select>";
        } else {
            print "<div class='alert alert-danger'>Não há nenhum resultado</div>";
        }
        ?>

        <br>
        <label>Médico</label>
        <?php
        $sqlBuscar4 = "SELECT * FROM medico";

        $res4 = mysqli_query($conexao, $sqlBuscar4) or die($conexao->error);

        $qtd4 = $res4->num_rows;

        if ($qtd4 > 0) {
            print "<select name='medico_id_med' class='form-control'>";
            print "<option> Selecione o Médico </option>";
            while ($row4 = $res4->fetch_object()) {
                print "<option value='" . $row4->id_med . "' " . ($row4->med_id_med == $row->med_id_med ? "selected" : "") . ">" . $row4->nome_med . "</option>";
            }
            print "</select>";
        } else {
            print "<div class='alert alert-danger'>Não há nenhum resultado</div>";
        }
        ?>

        <div class="form-group">
            <br>
            <label>Data da Consulta</label>
            <input type="date" id="data_consult" name="data_consult" class="form-control" value="<?php print $row->data_consult; ?>">
        </div>

        <div class="form-group">
            <br>
            <label>Hora da Consulta</label>
            <input type="time" id="hora_consult" name="hora_consult" class="form-control" value="<?php print $row->hora_consult; ?>">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
</form>