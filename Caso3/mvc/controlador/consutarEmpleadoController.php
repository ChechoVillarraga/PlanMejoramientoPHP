<?php

require_once '../../modelo/include_dao.php';
$c = array();
$objEmpleado = new PersonasPgDAO();

$c = $objEmpleado->queryAll();

//        print_r($c);
    foreach ($c as $personas) {
$id = $personas['idpersonas'];
echo '<tr id="fila-' . $id . '">'
.'<td>' . $id . '</td>'
.'<td>' . $personas['nombres'] . '</td>'
.'<td>' . $personas['apellidos'] . '</td>'
.'<td>' . $personas['correo'] . '</td>'
.'<td>' . $personas['rol'] . '</td>'
.'<td>' . $personas['area'] . '</td>'
.'</tr>';

    }
