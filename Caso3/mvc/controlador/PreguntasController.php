<?php

if ((!isset($_SESSION)) || (!session_id())) {
    session_start();
}
require_once "../../modelo/include_dao.php";
$c = array();
$objPregunta = new PersonaspreguntasPgDAO();

$c = $objPregunta->queryPreguntas();


foreach ($c as $pre) {
    echo "<tr>"
    . "<td>" . $pre["0"] . "</td>"
    . "<td>" . $pre["fechaenvio"] . "</td>"
    . "<td>" . $pre["2"] . "</td>"
    . "<td>" . $pre["preguntasrespuestas_idpreguntas"] . "</td>"
    . "<td>" . $pre["1"] . "</td>"
    . '<td><button type="button"'
            . 'onClick="location.href='
            . "'../crear/responderPregunta.php?"
            . "caso="
            . $pre["casos_idcasos"]."'"
                .'">Responder Pregunta</button>'
    . "</tr>";
}
