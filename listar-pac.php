<br>
<h1>Listar Pacientes</h1>
<br>
<?php

include("config.php");

$sqlBuscar = "SELECT p.*, c.* FROM paciente AS p
                INNER JOIN consultorio AS c
                ON p.consultorio_id_con = c.id_con";

$res = mysqli_query($conexao, $sqlBuscar) or die($conexao->error);

$qtd = $res->num_rows;

print "<p class='paragraph'>Encontrou <b>" . $qtd . "</b> resultado(s)</p>";

if ($qtd > 0) {
    print "<table class='table table-striped table-hover'>";
    print "<tr>";
    print "<th>Consultório</th>";
    print "<th>C.P.F.</th>";
    print "<th>Nome do Paciente</th>";
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
        print "<td>" . $row->cpf_pac . "</td>";
        print "<td>" . $row->nome_pac . "</td>";
        print "<td>" . $row->nasc_pac . "</td>";
        print "<td>" . $row->gen_pac . "</td>";
        print "<td>" . $row->ocup_pac . "</td>";
        print "<td>" . $row->end_pac . "</td>";
        print "<td>" . $row->tel_pac . "</td>";
        print "<td>" . $row->email_pac . "</td>";
        print "<td>
				<button class='btn btn-success' onclick=\"location.href='?page=editar-pac&id_pac=" . $row->id_pac . "';\">Editar</button>

				<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-pac&acao=excluir&id_pac=" . $row->id_pac . "';}else{false;}\">Excluir</button>
                </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    print "<div class='alert alert-danger'>Não há nenhum resultado</div>";
}
?>