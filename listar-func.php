<br>
<h1>Listar Funcionários</h1>
<br>
<?php

include("config.php");

$sqlBuscar = "SELECT f.*, c.* FROM funcionario AS f
                INNER JOIN consultorio AS c
                ON f.consultorio_id_con = c.id_con";

$res = mysqli_query($conexao, $sqlBuscar) or die($conexao->error);

$qtd = $res->num_rows;

print "<p class='paragraph'>Encontrou <b>" . $qtd . "</b> resultado(s)</p>";

if ($qtd > 0) {
    print "<table class='table table-striped table-hover'>";
    print "<tr>";
    print "<th>Consultório</th>";
    print "<th>C.P.F.</th>";
    print "<th>Nome do Funcionário</th>";
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
        print "<td>" . $row->cpf_func . "</td>";
        print "<td>" . $row->nome_func . "</td>";
        print "<td>" . $row->nasc_func . "</td>";
        print "<td>" . $row->gen_func . "</td>";
        print "<td>" . $row->ocup_func . "</td>";
        print "<td>" . $row->end_func . "</td>";
        print "<td>" . $row->tel_func . "</td>";
        print "<td>" . $row->email_func . "</td>";
        print "<td>
				<button class='btn btn-success' onclick=\"location.href='?page=editar-func&id_func=" . $row->id_func . "';\">Editar</button>

				<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-func&acao=excluir&id_func=" . $row->id_func . "';}else{false;}\">Excluir</button>
                </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    print "<div class='alert alert-danger'>Não há nenhum resultado</div>";
}
?>