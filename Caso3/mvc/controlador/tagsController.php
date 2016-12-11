<?php

require_once '../../modelo/include_dao.php';
$c = array();
$objtags = new TagsPgDAO();

$c = $objtags->queryAll();

    foreach ($c as $categorias) {
//        print_r($categorias);
$idCategoria = $categorias['idtags'];
echo '<tr id="fila-' . $idCategoria . '">'
.'<td>' . $categorias['tags'] . '</td>'
.'<td>' . $categorias['descripciontags'] . '</td>'
.'</tr>';

    }
