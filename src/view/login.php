<body id="page-login" background-image="../../santanabcc/img/bglogin.jpg" style="background-size: 100%">
<!-- Navigation -->
<nav id="mainNav" class="navbar fixed-top navbar-toggleable-md navbar-light">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
        Home <i class="fa fa-bars"></i>
    </button>

    <div class="container">
        <a class="navbar-brand page-scroll" href="/santana/front.php">Otica Santana</a>
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
<script src="../../santanabcc/bootstrap/lib/jquery/jquery.min.js"></script>
<script src="../../santanabcc/bootstrap/lib/tether/tether.min.js"></script>
<script src="../../santanabcc/bootstrap/lib/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Theme JavaScript -->
<script src="../../santanabcc/bootstrap/js/new-age.min.js"></script>

</body>
</html>

<?php include(__DIR__ . "/../view/fix/footer.php") ?>
