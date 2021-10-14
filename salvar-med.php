<?php

include("config.php");

switch ($_REQUEST["acao"]) {

    case "cadastrar":
        $sqlInserir = "INSERT INTO medico (consultorio_id_con, sala_id_sala, cpf_med, nome_med, nasc_med, nac_med, gen_med, ocup_med, end_med, tel_med, email_med) 
        VALUES ('" . $_REQUEST["consultorio_id_con"] . "', '" . $_REQUEST["sala_id_sala"] . "', '" . $_REQUEST["cpf_med"] . "', '" . $_REQUEST["nome_med"] . "', '" . $_REQUEST["nasc_med"] . "', '" . $_REQUEST["nac_med"] . "', '" . $_REQUEST["gen_med"] . "', '" . $_REQUEST["ocup_med"] . "', '" . $_REQUEST["end_med"] . "', '" . $_REQUEST["tel_med"] . "', '" . $_REQUEST["email_med"] . "')";

        $res = mysqli_query($conexao, $sqlInserir);

        if ($res == true) {
            print "<br><div class='alert alert-success'>Foi cadastrado com sucesso!</div>";
        } else {
            print "<div class='alert alert-danger'>Não foi possível cadastrar.</div>";
        }
        break;

    case "editar":
        $sqlEditar = "UPDATE medico 
                SET cpf_med='" . $_REQUEST["cpf_med"] . "', 
                nome_med='" . $_REQUEST["nome_med"] . "', 
                nasc_med='" . $_REQUEST["nasc_med"] . "', 
                nac_med='" . $_REQUEST["nac_med"] . "', 
                gen_med='" . $_REQUEST["gen_med"] . "', 
                ocup_med='" . $_REQUEST["ocup_med"] . "', 
                end_med='" . $_REQUEST["end_med"] . "', 
                tel_med='" . $_REQUEST["tel_med"] . "', 
                email_med='" . $_REQUEST["email_med"] . "', 
                consultorio_id_con='" . $_REQUEST["consultorio_id_con"] . "' 
                WHERE id_med=" . $_REQUEST["id_med"];

        $res = mysqli_query($conexao, $sqlEditar);

        if ($res == true) {
            print "<br><div class='alert alert-success'>Foi editado com sucesso!</div>";
        } else {
            print "<div class='alert alert-danger'>Não foi possível editar.</div>";
        }
        break;

    case "excluir":
            $sqlExcluir = "DELETE FROM medico 
                    WHERE id_med=" . $_REQUEST["id_med"];

        $res = mysqli_query($conexao, $sqlExcluir);

        if ($res == true) {
            print "<br><div class='alert alert-success'>Foi excluído com sucesso!</div>";
        } else {
            print "<div class='alert alert-danger'>Não foi possível excluir.</div>";
        }
    break;
}
?>

<p><a href="?page=listar-med" class="btn btn-primary">Listar</a></p>