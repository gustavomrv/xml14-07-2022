<?php
if (isset($_SESSION["docente"])) {

    if (isset($_GET["doc"])) {
        $nav_docente = $_GET["doc"];
    } else {
        $nav_docente = "home";
    }
} else {
    echo "<script> window.location.href='/'</script> ";
}

if (isset($_POST['adicionar_docente'])) {
    $nav_docente = "new-docente";
}

switch ($nav_docente) {
    case "home":
        require_once $path . '/views/docente/header_docente.php';   
        require_once $path . '/views/docente/footer_docente_home.php'; 
        break;
    case "read-all-disciplinas":
        require_once $path . '/views/docente/header_docente.php';
        require_once $path . '/views/docente/footer_docente_disciplinas.php';
        break;
}
