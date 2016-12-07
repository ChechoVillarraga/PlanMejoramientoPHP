<?php

require_once '../../modelo/include_dao.php';
$c = array();
$objCategoria = new CategoriapreguntaPgDAO;
$objArea = new AreaPgDAO();

$c = $objCategoria->queryAllAndAreas();

    foreach ($c as $categorias) {
//        print_r($categorias);
$idCategoria = $categorias['idcategoriapregunta'];
echo '<tr id="fila-' . $idCategoria . '">'
.'<td>' . $idCategoria . '</td>'
.'<td>' . $categorias['categoria'] . '</td>'
.'<td>' . $categorias['descripcioncategoria'] . '</td>'
.'<td>' . $categorias['area'] . '</td>'
.'</tr>';

    }
