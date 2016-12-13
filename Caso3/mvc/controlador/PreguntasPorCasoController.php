<?php

require_once '../../modelo/include_dao.php';
$objPregunta = new PersonaspreguntasPgDAO();

$c = $objPregunta->queryPreguntasPorCaso($_GET['caso']);

//echo $_SESSION['idPersonas'];
//print_r($c);
foreach ($c as $pre) {
//    print_r($pre);
    
$id = $pre['3'];
echo '<tr>'
        .'<td>' . $pre['0'] . '</</td>'
        .'<td>' . $pre['fechaenvio'] . '</td>'
        .'<td>' . $pre['2'] . '</td>'
        .'<td>' . $pre['preguntasrespuestas_idpreguntas'] . '</td>'
        .'<td>' . $pre['1'] . '</td>'
    .'</tr>';
}
