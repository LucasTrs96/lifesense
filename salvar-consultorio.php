<br>
<?php

include("config.php");

switch($_REQUEST["acao"]){
	case "cadastrar":

		$sqlInserir = "INSERT INTO consultorio (cnpj_con, raz_con, cep_con, end_con, tel_con, email_con) 
				VALUES ('".$_REQUEST["cnpj_con"]."', '".$_REQUEST["raz_con"]."', '".$_REQUEST["cep_con"]."', 
				'".$_REQUEST["end_con"]."', '".$_REQUEST["tel_con"]."', '".$_REQUEST["email_con"]."')";

		$res = mysqli_query($conexao, $sqlInserir);

		if($res==true){
			print "<br><div class='alert alert-success'>Foi cadastrado com sucesso!</div>";
		}else{
			print "<div class='alert alert-danger'>Não foi possível cadastrar.</div>";
		}
	break;
    case "editar":
        $sqlEditar = "UPDATE consultorio 
                SET cnpj_con='" . $_REQUEST["cnpj_con"] . "', 
					raz_con='" . $_REQUEST["raz_con"] . "', 
                    cep_con='" . $_REQUEST["cep_con"] . "', 
                    end_con='" . $_REQUEST["end_con"] . "', 
                    tel_con='" . $_REQUEST["tel_con"] . "', 
                    email_con='" . $_REQUEST["email_con"] . "' 
                WHERE id_con=" . $_REQUEST["id_con"];

        $res = mysqli_query($conexao, $sqlEditar);

        if ($res == true) {
            print "<br><div class='alert alert-success'>Foi editado com sucesso!</div>";
        } else {
            print "<div class='alert alert-danger'>Não foi possível editar.</div>";
        }
        break;
	case "excluir":
		$sqlExcluir = "DELETE FROM consultorio WHERE id_con=".$_REQUEST["id_con"];

		$res = mysqli_query($conexao, $sqlExcluir);

		if($res==true){
			print "<br><div class='alert alert-success'>Foi excluído com sucesso!</div>";
		}else{
			print "<div class='alert alert-danger'>Não foi possível excluir.</div>";
		}
	break;

}
?>
<p><a href="?page=listar-consultorio" class="btn btn-primary">Listar</a></p>