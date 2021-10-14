<?php

include("config.php");

switch ($_REQUEST["acao"]) {

    case "cadastrar":
        $sqlInserir = "INSERT INTO sala (consultorio_id_con, espec_sala) 
        VALUES ('" . $_REQUEST["consultorio_id_con"] . "', '" . $_REQUEST["espec_sala"] . "')";

        $res = mysqli_query($conexao, $sqlInserir);

        if ($res == true) {
            print "<br><div class='alert alert-success'>Foi cadastrada com sucesso!</div>";
        } else {
            print "<div class='alert alert-danger'>Não foi possível cadastrar.</div>";
        }
        break;

    case "editar":
        $sqlEditar = "UPDATE sala 
                SET espec_sala='" . $_REQUEST["espec_sala"] . "', 
                    consultorio_id_con='" . $_REQUEST["consultorio_id_con"] . "' 
                WHERE id_sala=" . $_REQUEST["id_sala"];

        $res = mysqli_query($conexao, $sqlEditar);

        if ($res == true) {
            print "<br><div class='alert alert-success'>Foi editada com sucesso!</div>";
        } else {
            print "<div class='alert alert-danger'>Não foi possível editar.</div>";
        }
        break;

    case "excluir":
            $sqlExcluir = "DELETE FROM sala 
                    WHERE id_sala=" . $_REQUEST["id_sala"];

        $res = mysqli_query($conexao, $sqlExcluir);

        if ($res == true) {
            print "<br><div class='alert alert-success'>Foi excluída com sucesso!</div>";
        } else {
            print "<div class='alert alert-danger'>Não foi possível excluir.</div>";
        }
    break;
}
?>

<p><a href="?page=listar-sala" class="btn btn-primary">Listar</a></p>