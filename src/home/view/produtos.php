<!DOCTYPE html>
<?php include(__DIR__ . "/../view/fix/header.php") ?>

<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de produtos - Software Ótica Santana</title>

    <!-- Bootstrap CSS -->
    <link href="../../santana/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../santana/bootstrap/css/jquery.fileupload.css">
    <link rel="stylesheet" href="../../santana/bootstrap/css/jquery.fileupload-ui.css">
    <link rel="stylesheet" href="../../santana/bootstrap/css/style.css">

</head>
<body>

<div style=" margin: 5% 12.5%; position: relative; top:0 ">
    <br/><br/><br/>
<h1> Cadastro de produtos - Software Ótica Santana</h1>
<h2> Preencha o formulário abaixo com os dados do novo produto:</h2><br />

<div id="main" class="container-fluid">

    <h3 class="page-header">Adicionar Item</h3>

    <form id="fileupload" action="/santana/front.php/cProdutos" method="POST"  enctype="multipart/form-data">
        <!-- area de campos do form -->

        <div id="actions" class="row">

            <div class="col-md-12">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="campo1">Descrição</label>
                        <input type="text" class="form-control" id="descricao">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="campo2">Referencia</label>
                        <input type="text" class="form-control" id="id">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="campo3">Preço de Custo</label>
                        <input type="text" class="form-control" id="custo">
                    </div>


                    <div class="form-group col-md-4">
                        <label for="campo3">Fornecedor</label>
                        <input type="text" class="form-control" id="fornecedor">
                    </div>

                </div>


                <button type="submit" class="btn btn-primary">Salvar</button>
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
