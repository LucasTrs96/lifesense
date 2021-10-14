<br>
<h1>Listar Documentações</h1>
<br>
<?php

include("config.php");

$sqlBuscar = "SELECT d.*, c.* FROM documentacao AS d
                INNER JOIN consulta AS c
                ON d.consulta_id_consult = c.id_consult";

$res = mysqli_query($conexao, $sqlBuscar) or die($conexao->error);

$qtd = $res->num_rows;

print "<p class='paragraph'>Encontrou <b>" . $qtd . "</b> resultado(s)</p>";

if ($qtd > 0) {
    print "<table class='table table-striped table-hover'>";
    print "<tr>";
    print "<th>Consulta</th>";
    print "<th>ID</th>";
    print "<th>Tipo de Doc.</th>";
    print "<th>Data do Doc.</th>";
    print "<th>Hora de Emissão</th>";
    print "<th>Descrição</th>";
    print "<th>Ações</th>";
    print "</tr>";
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->id_consult . "</td>";
        print "<td>" . $row->id_doc . "</td>";
        print "<td>" . $row->tipo_doc . "</td>";
        print "<td>" . $row->data_doc . "</td>";
        print "<td>" . $row->hora_doc . "</td>";
        print "<td>" . $row->desc_doc . "</td>";
        print "<td>
				<button class='btn btn-success' onclick=\"location.href='?page=editar-doc&id_doc=" . $row->id_doc . "';\">Editar</button>

				<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-doc&acao=excluir&id_doc=" . $row->id_doc . "';}else{false;}\">Excluir</button>
                </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    print "<div class='alert alert-danger'>Não há nenhum resultado</div>";
}
?>