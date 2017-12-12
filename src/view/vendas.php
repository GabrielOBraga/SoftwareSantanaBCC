<?php include(__DIR__ . "/../view/fix/header.php") ?>

<div style=" margin: 5% 12.5%; position: relative; top:0 ">

<h1> Nova Vendas - Software Ótica Santana</h1>


<div id="main" class="container-fluid">
    <h3 class="page-header">Adicionar Vendas</h3>

    <form action="/santana/front.php/cProdutos" method="POST">
        <!-- area de campos do form -->
        Selecione o Produto:
        <select name="produto">
            <option value=<?=$request->request->get('Produto')?>><?=$request->request->get('descricao')?></option>
            <option value=<?=$request->request->get('Produto')?>><?=$request->request->get('descricao')?></option>
        </select>

        <div id="actions" class="row">
            <div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="/santana/front.php/adm" class="btn btn-default">Cancelar</a>
            </div>

        </div>

    </form>
</div>
