<br>
<h1>Listar Médicos</h1>
<br>
<?php

include("config.php");

$sqlBuscar = "SELECT c.*, s.*, m.* FROM consultorio AS c 
                INNER JOIN sala AS s 
                INNER JOIN medico AS m 
                ON m.consultorio_id_con = c.id_con 
                AND m.sala_id_sala = s.id_sala GROUP BY m.nome_med";

$res = mysqli_query($conexao, $sqlBuscar) or die($conexao->error);

$qtd = $res->num_rows;

print "<p class='paragraph'>Encontrou <b>" . $qtd . "</b> resultado(s)</p>";

if ($qtd > 0) {
    print "<table class='table table-striped table-hover'>";
    print "<tr>";
    print "<th>Consultório</th>";
    print "<th>Sala</th>";
    print "<th>C.P.F.</th>";
    print "<th>Nome do Médico</th>";
    print "<th>Data de Nascimento</th>";
    print "<th>Nacionalidade</th>";
    print "<th>Gênero</th>";
    print "<th>Ocupação</th>";
    print "<th>Endereço</th>";
    print "<th>Telefone</th>";
    print "<th>E-mail</th>";
    print "<th>Ações</th>";
    print "</tr>";
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->raz_con . "</td>";
        print "<td>" . $row->espec_sala . "</td>";
        print "<td>" . $row->cpf_med . "</td>";
        print "<td>" . $row->nome_med . "</td>";
        print "<td>" . $row->nasc_med . "</td>";
        print "<td>" . $row->gen_med . "</td>";
        print "<td>" . $row->ocup_med . "</td>";
        print "<td>" . $row->end_med . "</td>";
        print "<td>" . $row->tel_med . "</td>";
        print "<td>" . $row->email_med . "</td>";
        print "<td>
				<button class='btn btn-success' onclick=\"location.href='?page=editar-med&id_med=" . $row->id_med . "';\">Editar</button>

				<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-med&acao=excluir&id_med=" . $row->id_med . "';}else{false;}\">Excluir</button>
                </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    print "<div class='alert alert-danger'>Não há nenhum resultado</div>";
}
?>