<br>
<h1>Listar Usuários</h1>
<br>
<?php

include("config.php");

$sqlBuscar = "SELECT u.*, c.* FROM usuario AS u
                INNER JOIN consultorio AS c
                ON u.consultorio_id_con = c.id_con";

$res = mysqli_query($conexao, $sqlBuscar) or die($conexao->error);

$qtd = $res->num_rows;

print "<p class='paragraph'>Encontrou <b>" . $qtd . "</b> resultado(s)</p>";

if ($qtd > 0) {
    print "<table class='table table-striped table-hover'>";
    print "<tr>";
    print "<th>Consultório</th>";
    print "<th>ID</th>";
    print "<th>Cargo</th>";
    print "<th>Usuário</th>";
    print "<th>Ações</th>";
    print "</tr>";
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->raz_con . "</td>";
        print "<td>" . $row->id_user . "</td>";
        print "<td>" . $row->cargo_user . "</td>";
        print "<td>" . $row->login_user . "</td>";
        print "<td>
				<button class='btn btn-success' onclick=\"location.href='?page=editar-user&id_user=" . $row->id_user . "';\">Editar</button>

				<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-user&acao=excluir&id_user=" . $row->id_user . "';}else{false;}\">Excluir</button>
                </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    print "<div class='alert alert-danger'>Não há nenhum resultado</div>";
}
?>