<?php
session_start();
require_once '../modelo/include_dao.php';
if (isset($_POST["responder"]) || (isset($_POST["reenviar"]))) {
    $idEstado = "4";
    if (isset($_POST["reenviar"])) {
        $idEstado = "3";
    }
    
    $id=$_GET['caso'];
   
    $pregunta = $_POST["respuesta"];
    
    $obj = new PreguntasrespuestasPgDAO();
    $respuesta = $obj->insert($pregunta, $idEstado, $id);
    if ($respuesta) {
        echo "<script>alert('Enviado correctamente!')</script>";
        echo '<meta http-equiv="Refresh" content="0;URL=../vista/crear/ResponderPregunta.php?caso='.$id[0][0].'">';
    } else {
        echo "<script>alert('Error en el Envio!')</script>";
        echo '<meta http-equiv="Refresh" content="0;URL=../vista/crear/ResponderPregunta.php?caso='.$id[0][0].'">';
    }
} else {
    echo 'No entre';
}
