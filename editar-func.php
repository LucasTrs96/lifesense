<br>
<h1>Editar Funcionário</h1>
<br>

<?php

include("config.php");

$sqlBuscar = "SELECT * FROM funcionario 
                WHERE id_func=" . $_REQUEST["id_func"];

$res = mysqli_query($conexao, $sqlBuscar) or die($conexao->error);

$row = $res->fetch_object();

?>

<form action="?page=salvar-func" method="POST" id="formCSS">
    <input type="hidden" name="acao" value="editar">

    <input type="hidden" name="id_func" value="<?php print $row->id_func; ?>">
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
        <input type="text" id="cpf_func" name="cpf_func" class="form-control" value="<?php print $row->cpf_func; ?>">
    </div>

    <div class="form-group">
        <label>Nome do Funcionário</label>
        <input type="text" id="nome_func" name="nome_func" class="form-control" value="<?php print $row->nome_func; ?>">
    </div>

    <div class="form-group">
        <label>Data de Nascimento</label>
        <input type="date" id="nasc_func" name="nasc_func" class="form-control" value="<?php print $row->nasc_func; ?>">
    </div>

    <div class="form-group">
        <label>Nacionalidade</label>
        <input type="text" id="nac_func" name="nac_func" class="form-control" value="<?php print $row->nac_func; ?>">
    </div>

    <div class="form-group">
        <label>Gênero</label>
        <input type="text" id="gen_func" name="gen_func" class="form-control" value="<?php print $row->gen_func; ?>">
    </div>

    <div class="form-group">
        <label>Ocupação</label>
        <input type="text" id="ocup_func" name="ocup_func" class="form-control" value="<?php print $row->ocup_func; ?>">
    </div>

    <div class="form-group">
        <label>Endereço</label>
        <input type="text" id="end_func" name="end_func" class="form-control" value="<?php print $row->end_func; ?>">
    </div>

    <div class="form-group">
        <label>Telefone</label>
        <input type="text" id="tel_func" name="tel_func" class="form-control" value="<?php print $row->tel_func; ?>">
    </div>

    <div class="form-group">
        <label>E-mail</label>
        <input type="email" id="email_func" name="email_func" class="form-control" value="<?php print $row->email_func; ?>">
    </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
</form>