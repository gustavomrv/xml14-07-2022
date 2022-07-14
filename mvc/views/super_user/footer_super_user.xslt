<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
<html> 

  <head>
      <meta charset="UTF-8"/>
      <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'/>
      <link rel="stylesheet" href="./style.css"/>
      <title>Página inicial</title>
  </head>
    <style>
        table {
            caption-side: bottom;
            border-collapse: collapse;
        }
        thead {
            font-weight: 300px;
            color: white;
            border-radius: 10px;
            margin-top: 1px;
            margin-bottom: 1px;
            border: 1;
            padding-bottom: 1px;
            padding-top: 1px;
            background-color: #0d6efd;
        }
        td {
            color: black;
            border-radius: 1px;
            font-weight: 300px;
            font-size: 16px;
            padding-bottom: 1px;
            padding-top: 1px;
            border: 1;
            font-style: normal;
            font-family: sans-serif;
        }
    </style>

<body>
    <nav class="navbar navbar-expand-md navbar-dark navbar-offcanvas" style="background-color: #38B6FF">
        <div class="container-fluid">
            <a href="#" class="thumbnail">
                <img class="img-200-200" src="https://raw.githubusercontent.com/pedroLimaifg/nulldoubt/main/atividade/NullDoubt/avatar%20null%20doubt%20-%20VERTICAL%20COM%20NOME%20-%20BRANCO.png" />
            </a>


            <ul class="navbar-nav navbar-top">
                <b>
                    <li class="nav-item active">
                        <a class="nav-link" href='http://168.197.81.233:8000/index.php?p=admin#' type="submit" name="home"> Home <span class="sr-only"></span></a>
                    </li>
                </b>
                <b>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" href="#!" id="dropdownExample" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuários</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownExample">
                        <a class="dropdown-item" href="#">Discentes</a>
                        <a class="dropdown-item" href="#">Docentes</a>
                        <a class="dropdown-item" href="#">Monitores</a>
                    </div>
                </li>
                </b>
                <b>   
                <li class="nav-item active">
                    <a class="nav-link" href='#' type="submit" name="cursos"> Cursos <span class="sr-only"></span></a>
                </li>
                </b>
                <b>
                <li class="nav-item active">
                    <a class="nav-link" href='http://168.197.81.233:8000/' type="submit" name="locais"> Locais <span class="sr-only"></span></a>
                </li>
                </b>
                <b>
                <li class="nav-item active">
                    <a class="nav-link" href='http://168.197.81.233:8000/' type="submit" name="disciplinas"> Disciplinas <span class="sr-only"></span></a>
                </li>
                </b>
                <li class="nav-item active">
                    <a class="nav-link" href='http://168.197.81.233:8000/' type="submit" name="logout">Sair <span class="sr-only"></span></a>
                </li>
            </ul>
        </div>
    </nav>    
    
    <h4 class="text-center mt-5">Docentes</h4>

    <table border="1" class="table table-striped custom-table">
        <thead>
            <tr>
                <th scope="col">Matricula</th>
                <th scope="col">Nome</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
          <xsl:for-each select="todos_os_objetos/todos_os_docentes/docente">
          <tr>
            <td><xsl:value-of select="matricula"/></td>
            <td><xsl:value-of select="nome"/></td>
            <td><xsl:value-of select="ativo"/></td>
          </tr>
          </xsl:for-each>
        </tbody>
    </table>



    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js'></script>
    <script src="../script.js"></script>

</body>

</html>

</xsl:template>
</xsl:stylesheet>