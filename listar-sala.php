<br>
<h1>Listar Salas</h1>
<br>
<?php

include("config.php");

$sqlBuscar = "SELECT s.*, c.* FROM sala AS s
                INNER JOIN consultorio AS c
                ON s.consultorio_id_con = c.id_con";

$res = mysqli_query($conexao, $sqlBuscar) or die($conexao->error);

$qtd = $res->num_rows;

print "<p class='paragraph'>Encontrou <b>" . $qtd . "</b> resultado(s)</p>";

if ($qtd > 0) {
    print "<table class='table table-striped table-hover'>";
    print "<tr>";
    print "<th>Consultório</th>";
    print "<th>Número da Sala</th>";
    print "<th>Especialidade</th>";
    print "<th>Ações</th>";
    print "</tr>";
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->raz_con . "</td>";
        print "<td>" . $row->id_sala . "</td>";
        print "<td>" . $row->espec_sala . "</td>";
        print "<td>
				<button class='btn btn-success' onclick=\"location.href='?page=editar-sala&id_sala=" . $row->id_sala . "';\">Editar</button>

				<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-sala&acao=excluir&id_sala=" . $row->id_sala . "';}else{false;}\">Excluir</button>
                </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    print "<div class='alert alert-danger'>Não há nenhum resultado</div>";
}
?>