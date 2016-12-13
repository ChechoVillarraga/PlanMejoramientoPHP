<?php

require_once '../../modelo/include_dao.php';
$c = array();
$obj = new EstadosPgDAO();

$c = $obj->queryAll();

//        print_r($c);
        
foreach ($c as $pre) {
    $id = $pre['idestados'];

    echo '<option value="' . $id . '">' . $pre["estado"] . ' - '.$pre["descripcionestado"].'</option>';
}
