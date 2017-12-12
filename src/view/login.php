<!DOCTYPE html>
<html lang="pt">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap Core CSS -->
    <link href="../../santana/bootstrap/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="../../santana/bootstrap/lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../santana/bootstrap/lib/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="device-mockups/device-mockups.min.css">
    <link rel="stylesheet" href="../../santana/bootstrap/css/login.css">
    <!-- Theme CSS -->
    <link href="../../santana/bootstrap/css/new-age.min.css" rel="stylesheet">

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

<body id="page-login" background-image="../../santana/img/bglogin.jpg" style="background-size: 100%">
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
                <li class="navbar-toggler">
                    <a class="nav-link page-scroll" href="">Fechar</a>
                </li>
            </ul>
        </div>
    </div>

</nav>
<div class="login-page">
    <div class="form">
        <form class="login-form"  action="/santana/front.php/login" method="post">
            <input name="uname" type="text" placeholder="username"/>
            <input name="psw" type="password" placeholder="password"/>
            <button>login</button>
        </form>
    </div>
</div>


    <br/>
<!-- Bootstrap core JavaScript -->
<script src="../../santana/bootstrap/lib/jquery/jquery.min.js"></script>
<script src="../../santana/bootstrap/lib/tether/tether.min.js"></script>
<script src="../../santana/bootstrap/lib/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Theme JavaScript -->
<script src="../../santana/bootstrap/js/new-age.min.js"></script>

</body>
</html>

<?php include(__DIR__ . "/../view/fix/footer.php") ?>
