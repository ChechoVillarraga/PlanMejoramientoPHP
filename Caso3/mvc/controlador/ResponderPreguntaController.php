<?php
session_start();
require_once '../modelo/include_dao.php';
if (isset($_POST["responder"]) || (isset($_POST["reenviar"]))) {
    $idEstado = "4";
    
    $id=$_POST['responder'];
    
    $id = $_GET['caso'];
   
    $pregunta = $_POST["respuesta"];
    
    $objPer = new PersonasPgDAO();
    $per = $objPer->queryAllMisEmpleados();
    print_r($per);
    
    $obj = new PreguntasrespuestasPgDAO();
    $respuesta = $obj->insert($pregunta, $idEstado, $id, $per);
    if ($respuesta) {
        echo "<script>alert('Enviado correctamente!')</script>";
//        echo '<meta http-equiv="Refresh" content="0;URL=../vista/crear/ResponderPregunta.php?caso='.$_GET['caso'].'">';
    } else {
        echo "<script>alert('Error en el Envio!')</script>";
//        echo '<meta http-equiv="Refresh" content="0;URL=../vista/crear/ResponderPregunta.php?caso='.$_GET['caso'].'">';
    }
} else {
    echo 'No entre';
}
