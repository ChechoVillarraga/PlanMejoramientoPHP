<?php

session_start();
require_once '../modelo/include_dao.php';
if (isset($_POST["responder"]) || (isset($_POST["reenviar"]))) {
    $idEstado = "6";

    $idCasos = $_GET['caso'];

    $pregunta = $_POST["respuesta"];

    $per = $_POST['coor'];

    $obj = new PreguntasrespuestasPgDAO();
    $respuesta = $obj->insert($pregunta, $idEstado, $idCasos, $per);
    if ($respuesta) {
        echo "<script>alert('Enviado correctamente!')</script>";
        echo '<meta http-equiv="Refresh" content="0;URL=../vista/crear/ResponderPregunta.php?caso='.$idCasos.'">';
    } else {
        echo "<script>alert('Error en el Envio!')</script>";
        echo '<meta http-equiv="Refresh" content="0;URL=../vista/crear/ResponderPregunta.php?caso='.$idCasos.'">';
    }
} else {
    echo 'No entre';
}
