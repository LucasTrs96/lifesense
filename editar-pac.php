<br>
<h1>Editar Paciente</h1>
<br>

<?php

include("config.php");

$sqlBuscar = "SELECT * FROM paciente 
                WHERE id_pac=" . $_REQUEST["id_pac"];

$res = mysqli_query($conexao, $sqlBuscar) or die($conexao->error);

$row = $res->fetch_object();

?>

<form action="?page=salvar-pac" method="POST" id="formCSS">
    <input type="hidden" name="acao" value="editar">

    <input type="hidden" name="id_pac" value="<?php print $row->id_pac; ?>">
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
    <div class="form-group">
        <label>C.P.F.</label>
        <input type="text" id="cpf_pac" name="cpf_pac" class="form-control" value="<?php print $row->cpf_pac; ?>">
    </div>

    <div class="form-group">
        <label>Nome do Paciente</label>
        <input type="text" id="nome_pac" name="nome_pac" class="form-control" value="<?php print $row->nome_pac; ?>">
    </div>

    <div class="form-group">
        <label>Data de Nascimento</label>
        <input type="date" id="nasc_pac" name="nasc_pac" class="form-control" value="<?php print $row->nasc_pac; ?>">
    </div>

    <div class="form-group">
        <label>Nacionalidade</label>
        <input type="text" id="nac_pac" name="nac_pac" class="form-control" value="<?php print $row->nac_pac; ?>">
    </div>

    <div class="form-group">
        <label>Gênero</label>
        <input type="text" id="gen_pac" name="gen_pac" class="form-control" value="<?php print $row->gen_pac; ?>">
    </div>

    <div class="form-group">
        <label>Ocupação</label>
        <input type="text" id="ocup_pac" name="ocup_pac" class="form-control" value="<?php print $row->ocup_pac; ?>">
    </div>

    <div class="form-group">
        <label>Endereço</label>
        <input type="text" id="end_pac" name="end_pac" class="form-control" value="<?php print $row->end_pac; ?>">
    </div>

    <div class="form-group">
        <label>Telefone</label>
        <input type="text" id="tel_pac" name="tel_pac" class="form-control" value="<?php print $row->tel_pac; ?>">
    </div>

    <div class="form-group">
        <label>E-mail</label>
        <input type="email" id="email_pac" name="email_pac" class="form-control" value="<?php print $row->email_pac; ?>">
    </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
</form>