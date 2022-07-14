<?php

if (isset($_SESSION["super_user"])) {

    if (isset($_GET["adm"])) {
        $admin = $_GET["adm"];
    } else {
        $admin = "home";
    }
} else {
    echo "<script> window.location.href='/'</script> ";
}

if (isset($_POST['adicionar_docente'])) {
    $admin = "new-docente";
}

if (isset($_POST['editar_docente'])) {
    $admin = "edit-docente-2";
}

if (isset($_POST['adicionar_curso'])) {
    $admin = "new-curso";
}
if (isset($_POST['editar_curso'])) {
    $admin = "editar-curso";
}

if (isset($_POST['adicionar_discente'])) {
    $admin = "new-discente";
}
if (isset($_POST['editar_discente'])) {
    $admin = "edit-discente-2";
}

switch ($admin) {
    case "home":
        require_once $path . '/controller/super_user/prepare_xml_super_user.php';
        echo"<script> window.location.href='http://127.0.0.1/app/php/mvc/views/super_user/footer_super_user.xml'</script>";
        break;
    case "cursos":
        require_once $path . '/views/super_user/header.php';
        require_once $path . '/views/super_user/footer_curso.php';
        break;
    case "docentes":
        require_once $path . '/views/super_user/header.php';
        require_once $path . '/views/super_user/footer_docente.php';
        break;
    case "discentes":
        require_once $path . '/views/super_user/header.php';
        require_once $path . '/views/super_user/footer_discente.php';
        break;
    case "monitores":
        require_once $path . '/views/super_user/header.php';
        require_once $path . '/views/super_user/footer_monitor.php';
        break;
    case "disciplinas":
        require_once $path . '/views/super_user/header.php';
        require_once $path . '/views/super_user/footer_disciplina.php';
        break;

    case "altern-curso":
        require_once $path . '/controller/super_user/super_user.controller.curso.php';
        alternaStatusCurso();
        break;
    case "altern-docente":
        require_once $path . '/controller/super_user/super_user.controller.docente.php';
        alternaStatusDocente();
        break;
    case "altern-discente":
        require_once $path . '/controller/super_user/super_user.controller.discente.php';
        alternaStatusDiscente();
        break;
    case "altern-disciplina":
        require_once $path . '/controller/super_user/super_user.controller.disciplina.php';
        alternaStatusDisciplina();
        break;
    case "altern-discente-monitor":
        require_once $path . '/controller/super_user/super_user.controller.discente.php';
        alternaStatusDiscenteMonitor();
        break;

    case "new-curso":
        require_once $path . '/views/super_user/header.php';
        require_once $path . '/controller/super_user/super_user.controller.curso.php';
        //echo 'entrou no case new-curso';
        if (isset($_POST['codigo_curso'])) {
            novoCurso();
        }
        require_once $path . '/views/super_user/footer_curso.php';
        break;
    case "new-docente":
        require_once $path . '/views/super_user/header.php';
        require_once $path . '/controller/super_user/super_user.controller.docente.php';
        if (isset($_POST['matricula_docente'])) {
            novoDocente();
        }
        require_once $path . '/views/super_user/footer_super_user.php';
        break;
    case "new-discente":
        require_once $path . '/controller/super_user/super_user.controller.discente.php';
        if (isset($_POST['matricula_discente'])) {
            novoDiscente();
        }
        break;

    case "edit-docente-1":
        require_once $path . '/views/super_user/header.php';
        require_once $path . '/controller/super_user/super_user.controller.docente.php';
        //alternaStatusDocente();
        require_once $path . '/views/super_user/footer_edit_docente.php';
        break;
    case "edit-docente-2":
        require_once $path . '/views/super_user/header.php';
        require_once $path . '/controller/super_user/super_user.controller.docente.php';
        if (isset($_POST['change_nome_docente'])) {
            //echo 'teste do edit-docente-two';
            //echo $_POST['change_nome_docente'];
            editarDocente();
        }
        require_once $path . '/views/super_user/footer_super_user.php';
        break;
    case "edit-discente-1":
        require_once $path . '/views/super_user/header.php';
        require_once $path . '/controller/super_user/super_user.controller.discente.php';
        //alternaStatusDocente();
        require_once $path . '/views/super_user/footer_edit_discente.php';
        break;
    case "edit-discente-2":
        require_once $path . '/views/super_user/header.php';
        require_once $path . '/controller/super_user/super_user.controller.discente.php';
        if (isset($_POST['change_nome_discente'])) {
            editarDiscente();
        }
        require_once $path . '/views/super_user/footer_super_user.php';
        break;
}
