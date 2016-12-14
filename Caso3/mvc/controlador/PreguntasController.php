<?php

if ((!isset($_SESSION)) || (!session_id())) {
    session_start();
}
require_once "../../modelo/include_dao.php";
$c = array();
$objPregunta = new PersonaspreguntasPgDAO();

$c = $objPregunta->queryPreguntas("3", "6");
//print_r($c);
if (sizeof($c) > 0) {
    foreach ($c as $pre) {
        echo "<tr>"
        . "<td>" . $pre["0"] . "</td>"
        . "<td>" . $pre["fechaenvio"] . "</td>"
        . "<td>" . $pre["2"] . "</td>"
        . "<td>" . $pre["preguntasrespuestas_idpreguntas"] . "</td>"
        . "<td>" . $pre["1"] . "</td>";

        echo '<td><button type="button"'
        . 'onClick="location.href='
        . "'../crear/responderPregunta.php?"
        . "caso="
        . $pre["casos_idcasos"] . "&"
        . "cat="
        . $pre["categoriapregunta_idcategoriapregunta"] . "'"
        . '">';
        if ($_SESSION['roles_idroles'] == 2 || $_SESSION['roles_idroles'] == 3) {
            echo 'Responder Pregunta';
        } else if ($_SESSION['roles_idroles'] == 1) {
            echo 'Mas info';
        }
        echo '</button>';
        echo "</tr>";
    }
} else {
    echo "<tr>"
    . "<td>FELICITACIONES !</td>"
    . "<td> NO !</td>"
    . "<td> TIENES !</td>"
    . "<td> RESPUESTAS !</td>"
    . "<td> NUEVAS!</td>"
    . "<td>!</td>"
    . "</tr>";
}
