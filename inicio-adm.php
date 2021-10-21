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

    <title>Início • Administrador</title>

</head>

<?php
include("config.php");
?>

<body>

    <header class="container-fluid">
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/banner_1.jpg" style="backdrop-filter: blur(10px);" class="d-block w-100" alt="Medicina">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="escrita-mao2">Life SENSE</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top p-3">
        <a class="navbar-brand" href="inicio-adm.php?page=inicio-adm">Início || Administrador</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Consultórios
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="?page=cad-consultorio">Cadastrar</a>
                        <a class="dropdown-item" href="?page=listar-consultorio">Listar</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Salas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="?page=cad-sala">Cadastrar</a>
                        <a class="dropdown-item" href="?page=listar-sala">Listar</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Funcionários
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="?page=cad-func">Cadastrar</a>
                        <a class="dropdown-item" href="?page=listar-func">Listar</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Médicos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="?page=cad-med">Cadastrar</a>
                        <a class="dropdown-item" href="?page=listar-med">Listar</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pacientes
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="?page=cad-pac">Cadastrar</a>
                        <a class="dropdown-item" href="?page=listar-pac">Listar</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Usuários
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="?page=cad-user">Cadastrar</a>
                        <a class="dropdown-item" href="?page=listar-user">Listar</a>
                    </div>
                </li>

    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <?php

                switch (@$_REQUEST["page"]) {

                    case "cad-consultorio":
                        include("cad-consultorio.php");
                    break;
                    case "listar-consultorio":
                        include("listar-consultorio.php");
                    break;
                    case "editar-consultorio":
                        include("editar-consultorio.php");
                    break;
                    case "salvar-consultorio":
                        include("salvar-consultorio.php");
                    break;

                    case "cad-sala":
                        include("cad-sala.php");
                    break;
                    case "listar-sala":
                        include("listar-sala.php");
                    break;
                    case "editar-sala":
                        include("editar-sala.php");
                    break;
                    case "salvar-sala":
                        include("salvar-sala.php");
                    break;

                    case "cad-func":
                        include("cad-func.php");
                    break;
                    case "listar-func":
                        include("listar-func.php");
                    break;
                    case "editar-func":
                        include("editar-func.php");
                    break;
                    case "salvar-func":
                        include("salvar-func.php");
                    break;

                    case "cad-med":
                        include("cad-med.php");
                    break;
                    case "listar-med":
                        include("listar-med.php");
                    break;
                    case "editar-med":
                        include("editar-med.php");
                    break;
                    case "salvar-med":
                        include("salvar-med.php");
                    break;

                    case "cad-pac":
                        include("cad-pac.php");
                    break;
                    case "listar-pac":
                        include("listar-pac.php");
                    break;
                    case "editar-pac":
                        include("editar-pac.php");
                    break;
                    case "salvar-pac":
                        include("salvar-pac.php");
                    break;

                    case "cad-user":
                        include("cad-user.php");
                    break;
                    case "listar-user":
                        include("listar-user.php");
                    break;
                    case "editar-user":
                        include("editar-user.php");
                    break;
                    case "salvar-user":
                        include("salvar-user.php");
                    break;

                    default:
                        include("main-adm.php");
                }

                ?>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="js/validacao.js"></script>

    <footer id="rodape">
        <div>
            <h6>APMED &copy; 2021 • StartOPS - LTDA</h6>
        </div>
    </footer>

</body>

</html>