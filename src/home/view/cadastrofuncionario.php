<!DOCTYPE html>
<?php include(__DIR__ . "/../view/fix/headerAdm.php") ?>

<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Formulário de Cadastro de Funcionarios - Software Otica Santana</title>

    <!-- Bootstrap CSS -->
    <link href="../../santana/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div style=" margin: 5% 12.5%; position: relative; top:0 ">
    <br/><br/><br/><br/>
<h1> Formulario de Cadastro de Funcionario - Software Otica Santana</h1>
<h2> Preencha o formulário abaixo para cadastrar novo Funcionario</h2><br />
    <?php
        foreach ($this->session->getFlashBag()->all() as $type => $messages) {
            foreach ($messages as $message) {
                echo '<div class="alert alert-'.$type.'">'.$message.'</div>';
            }
        }
        ?>
    <br>
<form action="/santana/front.php/cFuncionario" method="POST" id="basicBootstrapForm" class="form-horizontal">

    <fieldset>
        <legend>Dados do Funcionário</legend>
    <div class="form-group">
        <label class="col-xs-3 control-label">Nome Completo</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="name" placeholder="Primeio Nome" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">CPF</label>
        <div class="col-xs-3">
            <input type="text" class="form-control" name="cpf" placeholder="Ex: 123.456.789-12" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">Data de Nascimento</label>
        <div class="col-xs-3">
            <input type="text"  maxlength="10" class="form-control" name="nascimento" placeholder="dd/mm/aaaa" />
        </div>
    </div>

        <div class="form-group">
            <label class="col-xs-3 control-label">Telefone</label>
            <div class="col-xs-3">
                <input type="text" class="form-control" name="telefone" placeholder="Ex: 62 3317 - 1751" />
            </div>
        </div>

    </fieldset>

    <fieldset>
        <legend>Endereço</legend>
        <div class="form-group">
            <label class="col-xs-3 control-label">Rua</label>
            <div class="col-xs-4">
                <input type="text" class="form-control" name="rua" placeholder="Ex: Av. Predo Ludovico" />
            </div>
            <div class="col-xs-4">
                <input type="text" class="form-control" name="numerorua" placeholder="Ex: 2020" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-3 control-label">CEP</label>
            <div class="col-xs-3">
                <input type="text" class="form-control" name="cep" placeholder="Ex: 75.091-125" />
            </div>
        </div>
    </fieldset>

    <fieldset>
    <legend>Dados de login</legend>

    <div class="form-group">
        <label class="col-xs-3 control-label">Email</label>
        <div class="col-xs-5">
            <input type="email" class="form-control" name="email" />
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-9 col-xs-offset-3">
            <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Salvar</button>
            <a href="/santana/front.php/adm" class="btn btn-default">Cancelar</a>
        </div>
    </div>
</form>
</div>

<!-- jQuery (necessario para os plugins Javascript do Bootstrap) -->
<script src="../../santana/bootstrap/js/jquery.js"></script>
<script src="../../santana/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
