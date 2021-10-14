<br>
<h1>Cadastrar Médico</h1>
<br>
<form action="?page=salvar-med" method="POST" id="formCSS">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="form-group">
        <label>Consultório(s)</label>
        <br>
        <?php
        $sqlBuscar = "SELECT * FROM consultorio";

        $res = mysqli_query($conexao, $sqlBuscar) or die($conexao->error);

        $qtd = $res->num_rows;

        if ($qtd > 0) {
            print "<select name='consultorio_id_con' class='form-control'>";
            print "<option> Selecione o Consultório  </option>";
            while ($row = $res->fetch_object()) {
                print "<option value='" . $row->id_con . "'>" . $row->raz_con . "</option>";
            }
            print "</select>";
        } else {
            print "<div class='alert alert-danger'>Não há nenhum Consultório cadastrada</div>";
        }

        ?>

        <br>
        <label>Sala(s)</label>

        <?php

        $sqlBuscar2 = "SELECT * FROM sala";

        $res2 = mysqli_query($conexao, $sqlBuscar2) or die($conexao->error);

        $qtd2 = $res2->num_rows;

        if ($qtd2 > 0) {
            print "<select name='sala_id_sala' class='form-control'>";
            print "<option> Selecione a Sala  </option>";
            while ($row = $res2->fetch_object()) {
                print "<option value='" . $row->id_sala . "'>" . $row->espec_sala . "</option>";
            }
            print "</select>";
        } else {
            print "<div class='alert alert-danger'>Não há nenhum Consultório cadastrada</div>";
        }

        ?>

    </div>

    <div class="form-group">
        <label>C.P.F.</label>
        <input type="text" id="cpf_med" name="cpf_med" value="cpf_med" class="form-control" placeholder="Somente Números" maxlength="11" required>
    </div>

    <div class="form-group">
        <label>Nome do Médico</label>
        <input type="text" id="nome_med" name="nome_med" value="nome_med" class="form-control" placeholder="Nome Completo" required>
    </div>

    <div class="form-group">
        <label>Data de Nascimento</label>
        <input type="date" id="nasc_med" value="nasc_med" name="nasc_med" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Nacionalidade</label>
        <input type="text" id="nac_med" name="nac_med" value="nac_med" class="form-control" placeholder="Nacionalidade" required>
    </div>

    <div class="form-group">
        <label>Gênero</label>
        <input type="text" id="gen_med" name="gen_med" value="gen_med" class="form-control" placeholder="Masculino, Feminino, Outros..." required>
    </div>

    <div class="form-group">
        <label>Ocupação</label>
        <input type="text" id="ocup_med" name="ocup_med" value="ocup_med" class="form-control" placeholder="Ocupação trabalhista" required>
    </div>

    <div class="form-group">
        <label>Endereço</label>
        <input type="text" id="end_med" name="end_med" value="end_med" class="form-control" placeholder="Cidade, Bairro, Rua, etc..." required>
    </div>

    <div class="form-group">
        <label>Telefone</label>
        <input type="text" id="tel_med" name="tel_med" value="tel_med" class="form-control" placeholder="DDD + 9 ou telefone Fixo" required>
    </div>

    <div class="form-group">
        <label>E-mail</label>
        <input type="email" id="email_med" name="email_med" value="email_med" class="form-control" placeholder="E-mail" required>
    </div>

    <div class="row">
        <div class="col-lg-10 col-sm-12 mb-3 form-check">
            <input type="checkbox" name="termos" id="termos" class="form-check-input" required>
            <label for="termos" class="form-check-label">
                <a href="termo-privacidade.php" target="_blank">Termos de Privacidade</a>
            </label>
        </div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </div>
</form>