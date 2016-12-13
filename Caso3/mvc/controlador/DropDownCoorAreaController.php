<?php

require_once '../../modelo/include_dao.php';
$c = array();
$obj = new PersonasPgDAO;

$c = $obj->queryAllByCoorArea();

//        print_r($c);
foreach ($c as $campos) {
    $id = $campos['idpersonas'];
    if ($id != $_SESSION['idPersonas']) {
        echo '<option value="' . $id . '">' . $campos['nombres'] . ' ' . $campos['apellidos'] . ' - ' . $campos['area'] . '</option>';
    }
}
