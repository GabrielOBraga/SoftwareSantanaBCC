<?php include(__DIR__ . "/../view/fix/header.php") ?>
<div style=" margin: 5% 12.5%; position: relative; top:0 ">

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
                <div class="row">
                <div>

                    <label for="imagem">Imagem Do Produtos</label>

                    <div class="row fileupload-buttonbar">

                            <div class="col-lg-7">
                                <!-- The fileinput-button span is used to style the file input field as button -->
                                <span class="btn btn-success fileinput-button">
                                 <i class="glyphicon glyphicon-plus"></i>
                                  <span>Adicionar Foto do Produto</span>
                                 <input type="file" name="files[]">
                                 </span>

                                <button type="reset" class="btn btn-warning cancel">
                                    <i class="glyphicon glyphicon-ban-circle"></i>
                                    <span>Cancelar upload</span>
                                </button>
                                <!-- The global file processing state -->
                                <span class="fileupload-process"></span>
                            </div>
                            <!-- The global progress state -->
                            <div class="col-lg-5 fileupload-progress fade">
                                <!-- The global progress bar -->
                                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                                </div>
                                <!-- The extended global progress state -->
                                <div class="progress-extended">&nbsp;</div>
                            </div>
                        </div>
                        <!-- The table listing the files available for upload/download -->
                        <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>

                </div>
                </div>

                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="/santanabcc/front.php/adm" class="btn btn-default">Cancelar</a>
            </div>

        </div>

    </form>

</div>
