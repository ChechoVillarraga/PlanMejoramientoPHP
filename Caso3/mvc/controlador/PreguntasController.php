<?php

if ((!isset($_SESSION)) || (!session_id())) {
    session_start();
}
require_once '../../modelo/include_dao.php';
$c = array();
$objPregunta = new PersonaspreguntasPgDAO();

$c = $objPregunta->queryPreguntas();

echo '<form action="../crear/responderPregunta.php?caso=' . $c["0"]["casos_idcasos"] . '" method="post">
      <table class="table">
      <thead>
      <tr class="filters">
      <th><input type="text" class="form-control" placeholder="Creacion del Caso" disabled></th>
      <th><input type="text" class="form-control" placeholder="Fecha Envio" disabled></th>
      <th><input type="text" class="form-control" placeholder="Pregunta" disabled></th>
      <th><input type="text" class="form-control" placeholder="Categoria" disabled></th>
      <th><input type="text" class="form-control" placeholder="Estado de la Pregunta" disabled></th>
      <th><input type="text" class="form-control" placeholder="" disabled></th>
      </tr>
      </thead>
      <tbody>';
foreach ($c as $pre) {
    echo '<tr>'
    . '<td>' . $pre['0'] . '</td>'
    . '<td>' . $pre['fechaenvio'] . '</td>'
    . '<td>' . $pre['2'] . '</td>'
    . '<td>' . $pre['preguntasrespuestas_idpreguntas'] . '</td>'
    . '<td>' . $pre['1'] . '</td>'
    . '<td><button type="submit" class="btn btn-warning" name="Responder">Responder Pregunta</button>'
    . '</tr>';
}
                   echo' </tbody>
                </table>
                </form>';
