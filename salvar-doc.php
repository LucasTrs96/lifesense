<?php

include("config.php");

switch ($_REQUEST["acao"]) {

    case "cadastrar":
        $sqlInserir = "INSERT INTO documentacao (consulta_id_consult, tipo_doc, data_doc, hora_doc, desc_doc) 
        VALUES ('" . $_REQUEST["consulta_id_consult"] . "', '" . $_REQUEST["tipo_doc"] . "', 
        '" . $_REQUEST["data_doc"] . "', '" . $_REQUEST["hora_doc"] . "', '" . $_REQUEST["desc_doc"] . "')";

        $res = mysqli_query($conexao, $sqlInserir);

        if ($res == true) {
            print "<br><div class='alert alert-success'>Foi cadastrada com sucesso!</div>";
        } else {
            print "<div class='alert alert-danger'>Não foi possível cadastrar.</div>";
        }
        break;

    case "editar":
        $sqlEditar = "UPDATE documentacao 
                SET tipo_doc='" . $_REQUEST["tipo_doc"] . "', 
                data_doc='" . $_REQUEST["data_doc"] . "', 
                hora_doc='" . $_REQUEST["hora_doc"] . "', 
                desc_doc='" . $_REQUEST["desc_doc"] . "', 
                consulta_id_consult='" . $_REQUEST["consulta_id_consult"] . "' 
                WHERE id_doc=" . $_REQUEST["id_doc"];

        $res = mysqli_query($conexao, $sqlEditar);

        if ($res == true) {
            print "<br><div class='alert alert-success'>Foi editado com sucesso!</div>";
        } else {
            print "<div class='alert alert-danger'>Não foi possível editar.</div>";
        }
        break;

    case "excluir":
            $sqlExcluir = "DELETE FROM documentacao 
                    WHERE id_doc=" . $_REQUEST["id_doc"];

        $res = mysqli_query($conexao, $sqlExcluir);

        if ($res == true) {
            print "<br><div class='alert alert-success'>Foi excluída com sucesso!</div>";
        } else {
            print "<div class='alert alert-danger'>Não foi possível excluir.</div>";
        }
    break;
}
?>

<p><a href="?page=listar-doc" class="btn btn-primary">Listar</a></p>