<?php

include("config.php");

switch ($_REQUEST["acao"]) {

    case "cadastrar":
        $sqlInserir = "INSERT INTO usuario (consultorio_id_con, cargo_user, login_user, senha_user) 
        VALUES ('" . $_REQUEST["consultorio_id_con"] . "', '" . $_REQUEST["cargo_user"] . "', '" . $_REQUEST["login_user"] . "', '" . $_REQUEST["senha_user"] . "')";

        $res = mysqli_query($conexao, $sqlInserir);

        if ($res == true) {
            print "<br><div class='alert alert-success'>Foi cadastrado com sucesso!</div>";
        } else {
            print "<div class='alert alert-danger'>Não foi possível cadastrar.</div>";
        }
        break;

    case "editar":
        $sqlEditar = "UPDATE usuario 
                SET cargo_user='" . $_REQUEST["cargo_user"] . "', 
                    login_user='" . $_REQUEST["login_user"] . "', 
                    senha_user='" . $_REQUEST["senha_user"] . "', 
                    consultorio_id_con='" . $_REQUEST["consultorio_id_con"] . "' 
                WHERE id_user=" . $_REQUEST["id_user"];

        $res = mysqli_query($conexao, $sqlEditar);

        if ($res == true) {
            print "<br><div class='alert alert-success'>Foi editado com sucesso!</div>";
        } else {
            print "<div class='alert alert-danger'>Não foi possível editar.</div>";
        }
        break;

    case "excluir":
            $sqlExcluir = "DELETE FROM usuario 
                    WHERE id_user=" . $_REQUEST["id_user"];

        $res = mysqli_query($conexao, $sqlExcluir);

        if ($res == true) {
            print "<br><div class='alert alert-success'>Foi excluído com sucesso!</div>";
        } else {
            print "<div class='alert alert-danger'>Não foi possível excluir.</div>";
        }
    break;
}
?>

<p><a href="?page=listar-user" class="btn btn-primary">Listar</a></p>