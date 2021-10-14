<?php

include("config.php");

switch ($_REQUEST["acao"]) {

    case "cadastrar":
        $sqlInserir = "INSERT INTO funcionario (consultorio_id_con, cpf_func, nome_func, nasc_func, nac_func, gen_func, 
                                                ocup_func, end_func, tel_func, email_func) 
        VALUES ('" . $_REQUEST["consultorio_id_con"] . "', '" . $_REQUEST["cpf_func"] . "', '" . $_REQUEST["nome_func"] . "', 
        '" . $_REQUEST["nasc_func"] . "', '" . $_REQUEST["nac_func"] . "', '" . $_REQUEST["gen_func"] . "', '" . $_REQUEST["ocup_func"] . "', '" . $_REQUEST["end_func"] . "', '" . $_REQUEST["tel_func"] . "', '" . $_REQUEST["email_func"] . "')";

        $res = mysqli_query($conexao, $sqlInserir);

        if ($res == true) {
            print "<br><div class='alert alert-success'>Foi cadastrado com sucesso!</div>";
        } else {
            print "<div class='alert alert-danger'>Não foi possível cadastrar.</div>";
        }
        break;

    case "editar":
        $sqlEditar = "UPDATE funcionario 
                SET cpf_func='" . $_REQUEST["cpf_func"] . "', 
                nome_func='" . $_REQUEST["nome_func"] . "', 
                nasc_func='" . $_REQUEST["nasc_func"] . "', 
                nac_func='" . $_REQUEST["nac_func"] . "', 
                gen_func='" . $_REQUEST["gen_func"] . "', 
                ocup_func='" . $_REQUEST["ocup_func"] . "', 
                end_func='" . $_REQUEST["end_func"] . "', 
                tel_func='" . $_REQUEST["tel_func"] . "', 
                email_func='" . $_REQUEST["email_func"] . "', 
                consultorio_id_con='" . $_REQUEST["consultorio_id_con"] . "' 
                WHERE id_func=" . $_REQUEST["id_func"];

        $res = mysqli_query($conexao, $sqlEditar);

        if ($res == true) {
            print "<br><div class='alert alert-success'>Foi editado com sucesso!</div>";
        } else {
            print "<div class='alert alert-danger'>Não foi possível editar.</div>";
        }
        break;

    case "excluir":
            $sqlExcluir = "DELETE FROM funcionario 
                    WHERE id_func=" . $_REQUEST["id_func"];

        $res = mysqli_query($conexao, $sqlExcluir);

        if ($res == true) {
            print "<br><div class='alert alert-success'>Foi excluído com sucesso!</div>";
        } else {
            print "<div class='alert alert-danger'>Não foi possível excluir.</div>";
        }
    break;
}
?>

<p><a href="?page=listar-func" class="btn btn-primary">Listar</a></p>