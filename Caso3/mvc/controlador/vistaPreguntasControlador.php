<?php

require_once '../../modelo/include_dao.php';

$objCategoria = new CategoriapreguntaPgDAO;
$objCategoria->queryAll();


foreach ($objCategoria as $categorias) {
    echo '
          <li><a href="#">' . $categorias->get('categoria') . '</a></li>
					</tr>
				';
}