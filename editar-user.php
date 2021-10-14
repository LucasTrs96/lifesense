<br>
<h1>Editar Usuário</h1>
<br>

<?php

include("config.php");

$sqlBuscar = "SELECT * FROM usuario 
                WHERE id_user=" . $_REQUEST["id_user"];

$res = mysqli_query($conexao, $sqlBuscar) or die($conexao->error);

$row = $res->fetch_object();

?>

<form action="?page=salvar-user" method="POST" id="formCSS">
    <input type="hidden" name="acao" value="editar">

    <input type="hidden" name="id_user" value="<?php print $row->id_user; ?>">
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
            <label>Cargo</label>
            <input type="text" id="cargo_user" name="cargo_user" class="form-control" value="<?php print $row->cargo_user; ?>">
        </div>

        <div class="form-group">
            <br>
            <label>Login</label>
            <input type="text" id="login_user" name="login_user" class="form-control" value="<?php print $row->login_user; ?>">
        </div>

        <div class="form-group">
            <br>
            <label>Senha</label>
            <input type="text" id="senha_user" name="senha_user" class="form-control" value="<?php print $row->senha_user; ?>">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
</form>