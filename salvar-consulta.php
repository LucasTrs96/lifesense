<?php

include("config.php");

switch ($_REQUEST["acao"]) {

    case "cadastrar":
        $sqlInserir = "INSERT INTO consulta (consultorio_id_con, sala_id_sala, medico_id_med, data_consult, hora_consult) 
        VALUES ('" . $_REQUEST["consultorio_id_con"] . "', '" . $_REQUEST["sala_id_sala"] . "', '" . $_REQUEST["medico_id_med"] . "', '" . $_REQUEST["data_consult"] . "', '" . $_REQUEST["hora_consult"] . "')";

        $res = mysqli_query($conexao, $sqlInserir);

        if ($res == true) {
            print "<br><div class='alert alert-success'>Foi cadastrada com sucesso!</div>";
        } else {
            print "<div class='alert alert-danger'>Não foi possível cadastrar.</div>";
        }
        break;

    case "editar":
        $sqlEditar = "UPDATE consulta 
                SET data_consult='" . $_REQUEST["data_consult"] . "', 
                    hora_consult='" . $_REQUEST["hora_consult"] . "', 
                    sala_id_sala='" . $_REQUEST["sala_id_sala"] . "', 
                    medico_id_med='" . $_REQUEST["medico_id_med"] . "', 
                    consultorio_id_con='" . $_REQUEST["consultorio_id_con"] . "' 
                WHERE id_consult=" . $_REQUEST["id_consult"];
    
        $res = mysqli_query($conexao, $sqlEditar);

        if ($res == true) {
            print "<br><div class='alert alert-success'>Foi editada com sucesso!</div>";
        } else {
            print "<div class='alert alert-danger'>Não foi possível editar.</div>";
        }
        break;

    case "excluir":
            $sqlExcluir = "DELETE FROM consulta 
                    WHERE id_consult=" . $_REQUEST["id_consult"];

        $res = mysqli_query($conexao, $sqlExcluir);

        if ($res == true) {
            print "<br><div class='alert alert-success'>Foi excluída com sucesso!</div>";
        } else {
            print "<div class='alert alert-danger'>Não foi possível excluir.</div>";
        }
    break;
}
?>

<p><a href="?page=listar-consulta" class="btn btn-primary">Listar</a></p>