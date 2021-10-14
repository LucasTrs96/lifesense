<?php

include("config.php");

switch ($_REQUEST["acao"]) {

    case "cadastrar":
        $sqlInserir = "INSERT INTO paciente (consultorio_id_con, cpf_pac, nome_pac, nasc_pac, nac_pac, gen_pac, 
                                                ocup_pac, end_pac, tel_pac, email_pac) 
        VALUES ('" . $_REQUEST["consultorio_id_con"] . "', '" . $_REQUEST["cpf_pac"] . "', '" . $_REQUEST["nome_pac"] . "', 
        '" . $_REQUEST["nasc_pac"] . "', '" . $_REQUEST["nac_pac"] . "', '" . $_REQUEST["gen_pac"] . "', '" . $_REQUEST["ocup_pac"] . "', '" . $_REQUEST["end_pac"] . "', '" . $_REQUEST["tel_pac"] . "', '" . $_REQUEST["email_pac"] . "')";

        $res = mysqli_query($conexao, $sqlInserir);

        if ($res == true) {
            print "<br><div class='alert alert-success'>Foi cadastrado com sucesso!</div>";
        } else {
            print "<div class='alert alert-danger'>Não foi possível cadastrar.</div>";
        }
        break;

    case "editar":
        $sqlEditar = "UPDATE paciente 
                SET cpf_pac='" . $_REQUEST["cpf_pac"] . "', 
                nome_pac='" . $_REQUEST["nome_pac"] . "', 
                nasc_pac='" . $_REQUEST["nasc_pac"] . "', 
                nac_pac='" . $_REQUEST["nac_pac"] . "', 
                gen_pac='" . $_REQUEST["gen_pac"] . "', 
                ocup_pac='" . $_REQUEST["ocup_pac"] . "', 
                end_pac='" . $_REQUEST["end_pac"] . "', 
                tel_pac='" . $_REQUEST["tel_pac"] . "', 
                email_pac='" . $_REQUEST["email_pac"] . "', 
                consultorio_id_con='" . $_REQUEST["consultorio_id_con"] . "' 
                WHERE id_pac=" . $_REQUEST["id_pac"];

        $res = mysqli_query($conexao, $sqlEditar);

        if ($res == true) {
            print "<br><div class='alert alert-success'>Foi editado com sucesso!</div>";
        } else {
            print "<div class='alert alert-danger'>Não foi possível editar.</div>";
        }
        break;

    case "excluir":
            $sqlExcluir = "DELETE FROM paciente 
                    WHERE id_pac=" . $_REQUEST["id_pac"];

        $res = mysqli_query($conexao, $sqlExcluir);

        if ($res == true) {
            print "<br><div class='alert alert-success'>Foi excluído com sucesso!</div>";
        } else {
            print "<div class='alert alert-danger'>Não foi possível excluir.</div>";
        }
    break;
}
?>

<p><a href="?page=listar-pac" class="btn btn-primary">Listar</a></p>