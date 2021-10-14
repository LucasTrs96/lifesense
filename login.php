<!DOCTYPE html>
<html lang="pt-br">

<head>

    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS & Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Login • Life SENSE</title>
</head>


<body>

    <header class="container-fluid" id="header1">

        <h1 class="escrita-mao">Life SENSE</h1>

    </header>

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

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<footer id="rodape">
    <div>
        <h6>APMED &copy; 2021 • StartOPS - LTDA</h6>
    </div>
</footer>

</html>