<?php
/**
 * Created by PhpStorm.
 * User: gabri
 * Date: 12/12/2017
 * Time: 09:40
 */


$model->label("nome"); //Implementar este método em todos os models

View::printFlashbags($model); //  imprime o conteúdo da flashbag, caso exista

$form= Form::Begin("/santana/front.php/servidor/create");// Inicia um formulário

$form->input("text",$model,'nome'); //cria um label seguido de um input-text que pode receber um valor já preenchido

//do campo 'nome' do model $model

$data=Membros::find(['']);  //já fizeram (ou deveriam ter feito)

$form->select($model,'membro_id',$data,'id','nome'); //cria um label e um select com base no array $data, selecionando

// o que será armazenado como 'id' e o que será visualizado como "nome"

$form->end("Enviar");//Cria o botão de enviar e finaliza um formulário.

View::GridView($data,['nome','curso'=>'getCursoName']); //Cria uma tabela com os dados disponíveis em $data, Mostrando os

//membros nome e curso, como Curso é um código, ele deverá mostrar o

//conteúdo do método getCursoName do respectivo model

//Inserindo um link para os detalhes dos dados.  Para acessar um membro privado utilize o que postei no fórum

View::DetailView($model,['nome','curso'=>'getCursoName']); //Cria uma tabela vertical , com os Labels dos campos na 1º coluna,

// e os dados na 2º coluna.



$model= Membro::loadModel($request); // Cria um objeto do Tipo Membro, baseado no

// enviado pelo request.