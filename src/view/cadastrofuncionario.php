<body background="../../santana/img/fundosantana.png" style="background-size: 100%" id="page-cfuncionario" >

<br/><br/>

<!-- Navigation -->
<nav id="mainNav" class="navbar fixed-top navbar-toggleable-md navbar-light">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
        Home <i class="fa fa-bars"></i>
    </button>

    <div class="container">
        <a class="navbar-brand page-scroll" href="/santana/front.php/index">Otica Santana</a>
        <div class="collapse navbar-collapse" id="navbarExample">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="/santana/front.php/login">Login</a>
                </li>
            </ul>
        </div>
    </div>

</nav>

<div style=" margin: 5% 12.5%; position: relative; top:0 ">

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
                <div class="col-xs-4">
                    <input type="text" class="form-control" name="firstName" placeholder="Primeiro Nome" />
                </div>
                <div class="col-xs-4">
                    <input type="text" class="form-control" name="lastName" placeholder="Sobrenome" />
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
                <div class="col-xs-2">
                    <input type="number"  maxlength="2" class="form-control" name="dia" placeholder="dd" />
                </div>
                <div class="col-xs-2">
                    <input type="number"  maxlength="2" class="form-control" name="mes" placeholder="mm" />
                </div>
                <div class="col-xs-2">
                    <input type="number"  maxlength="4" class="form-control" name="ano" placeholder="aaaa" />
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
                <label class="col-xs-3 control-label">Username</label>
                <div class="col-xs-5">
                    <input type="text" class="form-control" name="username" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-xs-3 control-label">Email</label>
                <div class="col-xs-5">
                    <input type="email" class="form-control" name="email" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-xs-3 control-label">Login do Funcionário</label>
                <div class="col-xs-5">
                    <input type="text" class="form-control" name="username" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-xs-3 control-label">Senha</label>
                <div class="col-xs-5">
                    <input type="password" class="form-control" name="password" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-xs-3 control-label">Confirme a Senha</label>
                <div class="col-xs-5">
                    <input type="password" class="form-control" name="checkpassword" />
                </div>
            </div>
        </fieldset>

        <div class="form-group">
            <div class="col-xs-9 col-xs-offset-3">
                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Salvar</button>
                <a href="/santana/front.php/adm" class="btn btn-default">Cancelar</a>
            </div>
        </div>
    </form>
</div>
</body>

<?php include(__DIR__ . "/../view/fix/footer.php") ?>