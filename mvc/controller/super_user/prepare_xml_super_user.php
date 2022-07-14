<?php

$todos_os_objetos = simplexml_load_file('C:\xampp\htdocs\app\php\mvc\controller\super_user\footer_super_user.xml');
unset($todos_os_objetos->todos_os_docentes);

$dao = new DaoDocente();
$docentes_on = $dao->getAllActiveTeachers();
$docentes_off = $dao->getAllInactiveTeachers();
$todos_os_docentes = $todos_os_objetos->addChild('todos_os_docentes');

if ($docentes_on != null or $docentes_off != null) {
    if ($docentes_on != null) {
        foreach ($docentes_on as $docente_on) {
            $docente = $todos_os_docentes->addChild('docente');
            $docente->addChild('matricula', $docente_on->matricula);
            $docente->addChild('nome', $docente_on->nome);
            $docente->addChild('senha', $docente_on->senha);
            $docente->addChild('ativo', $docente_on->ativo);
        }
    }
    if ($docentes_off != null) {
        foreach ($docentes_off as $docente_off) {
            $docente = $todos_os_docentes->addChild('docente');
            $docente->addChild('matricula', $docente_off->matricula);
            $docente->addChild('nome', $docente_off->nome);
            $docente->addChild('senha', $docente_off->senha);
            $docente->addChild('ativo', $docente_off->ativo);
        }
    }
}

$dom = new DomDocument();
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;
$dom->loadXML($todos_os_objetos->asXML());
$dom->save('C:\xampp\htdocs\app\php\mvc\controller\super_user\footer_super_user.xml');
?>
