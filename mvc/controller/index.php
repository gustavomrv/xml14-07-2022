<?php
session_start();
require_once "./views/header.php";
require_once './models/class/super_user.class.php';
require_once './models/class/discente.class.php';
require_once './models/class/curso.class.php';
require_once 'dao/daocurso.php';
require_once 'dao/daodocente.php';
require_once 'dao/daodiscente.php';
require_once 'dao/daodisciplina.php';
require_once 'dao/daomatriculas.php';

$path = 'C:\xampp\htdocs\app\php\mvc'; 

//navegação
if (isset($_GET['p'])) {
    $page = $_GET['p'];
} else {
    //echo 'teste';
    $page = 'login';
}

//logout
if (isset($_POST['logout'])) {
    $page = 'logout';
}


switch ($page) {
    case "login":
        //echo "<script>alert('Dados incorretos.')</script>"; 
        require_once "./views/login.php";
        require_once $path . '/controller/login.controller.php';
        break;
    case "admin":
        if (isset($_SESSION['super_user'])) {
            require_once $path . '/controller/super_user/super_user.controller.php';
        } else {  
            echo "<script> window.location.href='/'</script> ";
        }
        break;
    case 'docente':
        if (isset($_SESSION['docente'])) {
            $id_docente = $_SESSION['docente'];
            require_once $path . '/controller/docente/docente.controller.php';
        } else {
            return $page = 'login';
        }
        break;
    case 'discente':
        if (isset($discente)) {
        } else {
            return $page = 'login';
        }
        break;
    case 'logout':
        session_unset();
        echo "<script> window.location.href='index.php?p=admin'</script>";
        break;
    default:
        echo $page;
        break;
}
?>

<?php
require_once "./views/footer.php";
?>