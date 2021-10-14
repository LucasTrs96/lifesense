<?php

    include("config.php");

    $cargo = $_REQUEST['cargo_user'];
    $login = $_REQUEST['login_user'];
    $senha = $_REQUEST['senha_user'];

    // Variável de código SQL de busca no banco de dados de acordo com os valores inseridos nas variáveis
    $sql = "SELECT * FROM usuario WHERE cargo_user = '{$cargo}' AND login_user = '{$login}' AND senha_user = '{$senha}'";

    // Variável de conexão da query com o banco
    $res = $conexao->query($sql) or die($conexao->error);

    // Variável de quantidade de valores retornados pelo banco em número de linhas
    $qtd = $res->num_rows;

    if ($qtd > 0) {

        if ($cargo == "Administrativo") {
            header('Location: inicio-adm.php');
        } else if ($cargo == "Funcionário") {
            header('Location: inicio-func.php');
        } else if ($cargo == "Médico") {
            header('Location: inicio-med.php');
        } else if ($cargo == "Paciente") {
            header('Location: inicio-pac.php');
        }

        exit;
    } else {
        print "<div class='alert alert-danger' style='margin-top: 2%; margin-left: 35%; margin-right: 35%; text-align: center;'>Não foi possível logar.</div>";

    ?><p><a style="margin-top: 2%; margin-left: 47%;" href="index.php?page=index" class="btn btn-primary">Voltar</a></p><?php

    }
?>