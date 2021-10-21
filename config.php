<?php
    $bdServidor = 'localhost'; //Pode ser localhost
    $bdUsuario = 'root'; //Usuário criado no BD
    $bdSenha = 'admin'; //Senha do BD
    $bdBanco = 'apmed'; //Nome do BD dentro do Servidor

    $conexao = mysqli_connect($bdServidor,$bdUsuario,$bdSenha,$bdBanco);

    if(mysqli_connect_errno()){ //Função retorna se houve algum erro, caso sim, exibe o erro e encerra a execução do sistema
        echo 'Problemas para conectar no banco. Erro:';
        echo mysqli_connect_error(); //Exibe qual foi o erro
        die(); //Encerra a execução do sistema
    }
?>