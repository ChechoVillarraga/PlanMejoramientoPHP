<?php

require_once "../../modelo/include_dao.php";

class estadisticaPdfController {

    public function generarTexto() {
        $texto="";
        $c = array();
        $objInforme = new PersonasPgDAO();

        $c = $objInforme->queryInforme();

        foreach ($c as $p) {
//        print_r($categorias);
            $idCategoria = $p["casos_idcasos"];
            $texto .= "<tr id='fila-" . $idCategoria . "'><td>" . $idCategoria . "</td><td>" . $p['preguntas'] . "</td><td>" . $p["categoria"] . "</td><td>" . $p["area"] . "</td><td>" . $p["fechacreacion"] . "</td></tr>";
        }
        return $texto;
    }

}
