<br>
<h1>Listar Consultas</h1>
<br>
<?php

include("config.php");

$sqlBuscar = "SELECT c1.*, s.*, m.*, c2.* FROM consultorio AS c1 
                INNER JOIN sala AS s 
                INNER JOIN medico AS m 
                INNER JOIN consulta AS c2 
                ON c2.consultorio_id_con = c1.id_con 
                AND c2.sala_id_sala = s.id_sala 
                AND c2.medico_id_med = m.id_med GROUP BY c2.id_consult";

$res = mysqli_query($conexao, $sqlBuscar) or die($conexao->error);

$qtd = $res->num_rows;

print "<p class='paragraph'>Encontrou <b>" . $qtd . "</b> resultado(s)</p>";

if ($qtd > 0) {
    print "<table class='table table-striped table-hover'>";
    print "<tr>";
    print "<th>Consultório</th>";
    print "<th>Sala</th>";
    print "<th>Nome do Médico</th>";
    print "<th>ID</th>";
    print "<th>Data da Consulta</th>";
    print "<th>Hora da Consulta</th>";
    print "<th>Ações</th>";
    print "</tr>";
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->raz_con . "</td>";
        print "<td>" . $row->espec_sala . "</td>";
        print "<td>" . $row->nome_med . "</td>";
        print "<td>" . $row->id_consult . "</td>";
        print "<td>" . $row->data_consult . "</td>";
        print "<td>" . $row->hora_consult . "</td>";
        print "<td>
				<button class='btn btn-success' onclick=\"location.href='?page=editar-consulta&id_consult=" . $row->id_consult . "';\">Editar</button>

				<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-consulta&acao=excluir&id_consult=" . $row->id_consult . "';}else{false;}\">Excluir</button>
                </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    print "<div class='alert alert-danger'>Não há nenhum resultado</div>";
}
?>