<br>
<h1>Listar Consultórios</h1>
<?php

	include("config.php");

	$sqlListar = "SELECT * FROM consultorio";
	
	$res = mysqli_query($conexao, $sqlListar) or die($conn->error);
	
	$qtd = $res->num_rows;
	
	print "<p>Encontrou <b>".$qtd."</b> resultado(s)</p>";
	
	if($qtd > 0){
		print "<table class='table table-striped table-hover'>";
		print "<tr>";
		print "<th>ID</th>";
		print "<th>C.N.P.J.</th>";
		print "<th>Razão Social</th>";
		print "<th>C.E.P.</th>";
		print "<th>Endereço</th>";
		print "<th>Telefone</th>";
		print "<th>E-mail</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_con."</td>";
			print "<td>".$row->cnpj_con."</td>";
			print "<td>".$row->raz_con."</td>";
			print "<td>".$row->cep_con."</td>";
			print "<td>".$row->end_con."</td>";
			print "<td>".$row->tel_con."</td>";
			print "<td>".$row->email_con."</td>";
			print "<td>
					<button class='btn btn-success' onclick=\"location.href='?page=editar-consultorio&id_con=".$row->id_con."';\">Editar</button>

					<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-consultorio&acao=excluir&id_con=".$row->id_con."';}else{false;}\">Excluir</button>
					</td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<div class='alert alert-danger'>Não há nenhum resultado</div>";
	}
?>