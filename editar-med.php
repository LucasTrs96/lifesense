<br>
<h1>Editar Médico</h1>
<br>

<?php

include("config.php");

$sqlBuscar = "SELECT * FROM medico 
                WHERE id_med=" . $_REQUEST["id_med"];

$res = mysqli_query($conexao, $sqlBuscar) or die($conexao->error);

$row = $res->fetch_object();

?>

<form action="?page=salvar-med" method="POST" id="formCSS">
    <input type="hidden" name="acao" value="editar">

    <input type="hidden" name="id_med" value="<?php print $row->id_med; ?>">
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
    <div class="form-group">
        <label>C.P.F.</label>
        <input type="text" id="cpf_med" name="cpf_med" class="form-control" value="<?php print $row->cpf_med; ?>">
    </div>

    <div class="form-group">
        <label>Nome do Médico</label>
        <input type="text" id="nome_med" name="nome_med" class="form-control" value="<?php print $row->nome_med; ?>">
    </div>

    <div class="form-group">
        <label>Data de Nascimento</label>
        <input type="date" id="nasc_med" name="nasc_med" class="form-control" value="<?php print $row->nasc_med; ?>">
    </div>

    <div class="form-group">
        <label>Nacionalidade</label>
        <input type="text" id="nac_med" name="nac_med" class="form-control" value="<?php print $row->nac_med; ?>">
    </div>

    <div class="form-group">
        <label>Gênero</label>
        <input type="text" id="gen_med" name="gen_med" class="form-control" value="<?php print $row->gen_med; ?>">
    </div>

    <div class="form-group">
        <label>Ocupação</label>
        <input type="text" id="ocup_med" name="ocup_med" class="form-control" value="<?php print $row->ocup_med; ?>">
    </div>

    <div class="form-group">
        <label>Endereço</label>
        <input type="text" id="end_med" name="end_med" class="form-control" value="<?php print $row->end_med; ?>">
    </div>

    <div class="form-group">
        <label>Telefone</label>
        <input type="text" id="tel_med" name="tel_med" class="form-control" value="<?php print $row->tel_med; ?>">
    </div>

    <div class="form-group">
        <label>E-mail</label>
        <input type="email" id="email_med" name="email_med" class="form-control" value="<?php print $row->email_med; ?>">
    </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
</form>