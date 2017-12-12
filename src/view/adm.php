<?php include(__DIR__ . "/../view/fix/headerAdm.php") ?>

<body id="page-login"  background="../../santana/img/fundosantana.png" style="background-size: 100%">

<br/><br/>

<div style="width: auto; height: auto; background-color: #dddddd; margin: 0 0 ; position: relative; top:0">
<div style=" margin: 0 12.5% ; position: relative; top:0 ">
    <br/><br/>
    Janela do Administrador

    <form action="/santana/front.php/cFuncionario" method="get">
        <button class="btn btn-link">Cadastro de Funcionarios</button>
    </form>


    <form action="/santana/front.php/vendas" method="get">
        <button class="btn btn-link">Vendas</button>
    </form>

    <form action="/santana/front.php/cProdutos" method="get">
        <button class="btn btn-link">Cadastrar Produtos</button>
    </form>

    <br/><br/>
</div>
</div>
</body>

<?php include(__DIR__ . "/../view/fix/footer.php") ?>