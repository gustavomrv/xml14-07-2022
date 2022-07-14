<head>
<?php

    $path = $_SERVER['DOCUMENT_ROOT'];
    require_once $path . '/views/super_user/style.php';

    ?>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark navbar-offcanvas" style="background-color: #38B6FF">
        <div class="container-fluid">
            <a href="#" class="thumbnail">
                <!-- https://i.ibb.co/MZLxpBq/avatar-null-doubt-VERTICAL-COM-NOME-BRANCO.png -->
                <img class="img-200-200" src="https://raw.githubusercontent.com/pedroLimaifg/nulldoubt/main/atividade/NullDoubt/avatar%20null%20doubt%20-%20VERTICAL%20COM%20NOME%20-%20BRANCO.png" />
            </a>


            <ul class="navbar-nav navbar-top">
                <b>
                    <li class="nav-item active">
                        <a class="nav-link" href='http://168.197.81.233:8000/index.php?p=docente#' type="submit" name="home"> Home <span class="sr-only"></span></a>
                    </li>
                </b>
                <b>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" href="#!" id="dropdownExample" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Atendimentos</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownExample">
                        <a class="dropdown-item" href="">Visualizar Atendimentos</a>
                        <a class="dropdown-item" href="">Histórico de Atendimentos</a>
                    </div>
                </li>
                </b>
                <b>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" href="#!" id="dropdownExample" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Monitoria</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownExample">
                        <a class="dropdown-item" href="">Visualizar Monitores</a>
                    </div>
                </li>
                </b>
                <b>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" href="#!" id="dropdownExample" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Históricos</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownExample">
                        <a class="dropdown-item" href="">Histórico Recentes</a>
                        <a class="dropdown-item" href="">Histórico Completo</a>
                    </div>
                </li>
                </b>
                <li class="nav-item active">
                    <a class="nav-link" href=' http://168.197.81.233:8000/' type="submit" name="logout">Sair<span class="sr-only"></span></a>
                </li>
            </ul>
            <!--
            <button class="navbar-toggler navbar-toggler-right navbar-icon" type="button" data-toggle="collapse" data-target="#navbar-mobile" aria-controls="navbar-mobile" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar bar1"></span>
                <span class="icon-bar bar2"></span>
                <span class="icon-bar bar3"></span>
            </button>
            <div class="navbar-collapse collapse ml-auto" id="navbar-mobile">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-image">
                        <img src="https://media-exp2.licdn.com/dms/image/C4E03AQGCujg0UINpeA/profile-displayphoto-shrink_200_200/0/1623087585375?e=1660780800&v=beta&t=oBdtpmLSAkHxbEMkOQGD_ApjliUdYunlENJv56Wells" class="avatar">
                        <a href="#!" class="nav-link">Meu perfil</a>
                    </li>
                    <li class="nav-item">
                        <a href="#!" class="nav-link">Configurações</a>
                    </li>
                    <li class="nav-item">
                        <a href="#!" class="nav-link">Mudar Senha</a>
                    </li>
                    <li class="nav-item">
                        <a href="#!" class="nav-link">Logout </a>
                    </li>
                </ul>
            </div>
-->
        </div>
    </nav>
    <div class="wrapper mt-4">
        <div class="container">
            <div class="row">
                <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
                <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js'></script>
                <script src="../script.js"></script>

