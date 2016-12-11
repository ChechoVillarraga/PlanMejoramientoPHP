<?php

require_once '../../modelo/include_dao.php';
$c = array();
$objCategoria = new CategoriapreguntaPgDAO;

$c = $objCategoria->queryAllAndAreas();

//        print_r($c);
        
foreach ($c as $categorias) {
    $idCategoria = $categorias['idcategoriapregunta'];

    echo '<option value="' . $idCategoria . '">' . $categorias['categoria'] . '</option>';
}
