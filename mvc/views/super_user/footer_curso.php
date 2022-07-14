<?php
function retornaAtivoEmFormatoTexto($ativo)
{
    if ($ativo == 1) {
        $ativo = "Ativo";
    } else {
        $ativo = "Inativo";
    }
    return $ativo;
}
?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <style>
            thead {
                font-weight: 300;
                color: white;
                border-radius: 10px;
                margin-top: 1px;
                margin-bottom: 1px;
                border: 1;
                padding-bottom: 1px;
                padding-top: 1px;
                background-color: #38B6FF;
            }
            td {
                background-color: #d3d3d3;
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
    </xsl:template>
</xsl:stylesheet>

<?php
$dao = new DaoCurso();
$courses_on = $dao->getAllActiveCoursers();
$courses_off = $dao->getAllInactiveCoursers();
echo '
<h4 class="text-center mt-5">Cursos</h4>

<table border="1" class="table table-striped custom-table">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Código</th>
            <th scope="col">Ativo</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>';

if ($courses_on != null or $courses_off != null) {
    if ($courses_on != null) {
        foreach ($courses_on as $course) {
            echo '
                    <tr>
                    <td>' . $course->nome . '</td>
                    <td> ' . $course->cod_curso . '</td>
                    <td> <font color="green"> <b>' . retornaAtivoEmFormatoTexto($course->ativo) . '</b> </font> </td>
                    <td> 
                    
                    <a href="?p=admin&adm=altern-curso&id='
                . $course->cod_curso .
                '" >    Desativar
                    </a>
                    </td>
                    </tr>
                    ';
        }
    }
    if ($courses_off != null) {
        foreach ($courses_off as $course) {
            echo '
                    <tr>
                    <td>' . $course->nome . '</td>
                    <td> ' . $course->cod_curso . '</td>
                    <td> <font color="red"> <b>' . retornaAtivoEmFormatoTexto($course->ativo) . '</b> </font> </td>
                    <td> 
                    
                    <a href="?p=admin&adm=altern-curso&id='
                    
                . $course->cod_curso .
                '" >
                                 Reativar
                                 </a>
                                 
                    </td>
                    </tr>
                    ';
        }
    }
} else {
    echo '
                    <tr>
                        <td colspan="3">Nenhum curso por enquanto</td>
                    </tr>
        
                ';
}

echo '
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <tr>
        <form method="post">
            <td>
            <a class="nav-link dropdown-toggle" role="button" href="#!" id="dropdownExample" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuários</a>
           <!-----
            <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Selecionar Curso
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">Administração </a></li>
              <li><a class="dropdown-item" href="#">Agronomia </a></li>
              <li><a class="dropdown-item" href="#">Ciências Biológicas </a></li>
              <li><a class="dropdown-item" href="#"> Ciência da Computação </a></li>
              <li><a class="dropdown-item" href="#">Engenharia Ambiental</a></li>
              <li><a class="dropdown-item" href="#">Engenharia Civil</a></li>
              <li><a class="dropdown-item" href="#">Zootecnia</a></li>
              <li><a class="dropdown-item" href="#">Ciências Biológicas</a></li>
              <li><a class="dropdown-item" href="#">Química</a></li>
              <li><a class="dropdown-item" href="#">Saneamento Ambiental</a></li>
            </ul>
          </div>
          
            </td>
            <td>
            </td>         
            <td>
               
            <button class="btn btn-primary" type="submit">adicionar</button>
                               
            </td>
     
            <td>

            </td>
            </form>
        </tr>
        ';
//if (isset($_POST['adicionar_curso'])) {


/*echo "<script>
            document.getElementById('adicionar_curso').addEventListener('click', function(event){
                event.preventDefault()
              });
              </script>";*/
// window.location.href='?p=admin&adm=new-docente'
//}
?>
</tbody>
</table>