<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Otica Santana</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../santanabcc/bootstrap/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="../../santanabcc/bootstrap/lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../santanabcc/bootstrap/lib/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="device-mockups/device-mockups.min.css">

    <!-- Theme CSS -->
    <link href="../../santanabcc/bootstrap/css/new-age.min.css" rel="stylesheet">

    <!-- Temporary navbar container fix until Bootstrap 4 is patched -->
    <style>
        .navbar-toggler {
            z-index: 1;
        }

        @media (max-width: 576px) {
            nav > .container {
                width: 100%;
            }
        }
    </style>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: gabri
 * Date: 20/02/2017
 * Time: 14:45
 */

require_once  __DIR__.'/../vendor/autoload.php';
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing;
use Symfony\Component\HttpKernel;
use src\framework\Framework;


$request= Request::createFromGlobals();

$routes= new Routing\RouteCollection();


$routes->add('adm_home',new Routing\Route('/adm',[
            '_controller'=>'src\controller\ControllerAdm::admAction'
        ]
    )
);

/*
$routes->add('contact_home',new Routing\Route('/contato',[
            '_controller'=>'src\controller\Controller::contactAction'
        ]
    )
);
*/

$routes->add('testaForm',new Routing\Route('/testaForm',[
            '_controller'=>'src\controller\Controller::contactAction'
        ]
    )
);

$routes->add('index_home',new Routing\Route('/index',[
            '_controller'=>'src\controller\Controller::indexAction'
        ]
    )
);

$routes->add('localizacao_home',new Routing\Route('/localizacao',[
            '_controller'=>'src\controller\ControllerAdm::localizacaoAction'
        ]
    )
);

$routes->add('login_home',new Routing\Route('/login',[
            '_controller'=>'src\controller\Controller::loginAction'
        ]
    )
);

$routes->add('oticaMovel_home',new Routing\Route('/oticaMovel',[
            '_controller'=>'src\controller\Controller::oticaMovelAction'
        ]
    )
);

$routes->add('produtos_home',new Routing\Route('/cProdutos',[
            '_controller'=>'src\controller\ControllerAdm::produtosAction'
        ]
    )
);

$routes->add('cFuncionario_home',new Routing\Route('/cFuncionario',[
            '_controller'=>'src\controller\ControllerAdm::cFuncionarioAction'
        ]
    )
);

$routes->add('sistema_home',new Routing\Route('/sistema',[
            '_controller'=>'src\controller\ControllerEnter::sistemaAction'
        ]
    )
);

$routes->add('vendas_home',new Routing\Route('/vendas',[
            '_controller'=>'src\controller\ControllerEnter::vendasAction'
        ]
    )
);


$context = new Routing\RequestContext();
$matcher = new Routing\Matcher\UrlMatcher($routes,$context);

$controllerResolver = new HttpKernel\Controller\ControllerResolver();
$argumentResolver = new HttpKernel\Controller\ArgumentResolver();

$framework = new Framework($matcher,$controllerResolver,$argumentResolver);
$response = $framework->handle($request);


$response->send();

?>
</body>
<!-- jQuery (necessario para os plugins Javascript do Bootstrap) -->
<script src="../../santanabcc/bootstrap/js/jquery.js"></script>
<script src="../../santanabcc/bootstrap/js/bootstrap.min.js"></script>

</html>