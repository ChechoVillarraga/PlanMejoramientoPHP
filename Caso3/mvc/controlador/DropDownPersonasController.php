<?php

require_once '../../modelo/include_dao.php';
$c = array();
$obj = new PersonasPgDAO;

$c = $obj->queryAllByCoordinadores();

//        print_r($c);
foreach ($c as $campos) {
    $id = $campos['idpersonas'];

    echo '<li><a href="#" id="' . $id . '">' . $campos['nombres'] . ' ' . $campos['apellidos'] . ' - ' . $campos['area'] . '</a></li>';
}
