<?php

function alternaStatusDisciplina()
{
    $id = $_GET['id'];
    $dao = new DaoDisciplina();
    $class_info = $dao->getDisciplinaInfo($id);
    $ativo = $class_info['ativo'];

    $dao->alterarStatusAtivoDaDisciplina($id, $ativo);
}

?>