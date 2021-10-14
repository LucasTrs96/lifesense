<br>
<h1>Editar Sala</h1>
<br>

<?php

include("config.php");

$sqlBuscar = "SELECT * FROM sala 
                WHERE id_sala=" . $_REQUEST["id_sala"];

$res = mysqli_query($conexao, $sqlBuscar) or die($conexao->error);

$row = $res->fetch_object();

?>

<form action="?page=salvar-sala" method="POST" id="formCSS">
    <input type="hidden" name="acao" value="editar">

    <input type="hidden" name="id_sala" value="<?php print $row->id_sala; ?>">
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

        <div class="form-group">
            <br>
            <label>Especialidade</label>
            <input type="text" id="espec_sala" name="espec_sala" class="form-control" value="<?php print $row->espec_sala; ?>">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
</form>