<?php

session_start();
require_once '../modelo/include_dao.php';
require_once '../servicios/MailGildardou/Mail.php';
if (isset($_POST["responder"]) || (isset($_POST["reenviar"]))) {
    $idEstado = "4";

    $id = $_POST['responder'];

    $id = $_GET['caso'];

    $pregunta = $_POST["respuesta"];

    $per = $_SESSION['idPersonas'];

    $obj = new PreguntasrespuestasPgDAO();
    $respuesta = $obj->insert($pregunta, $idEstado, $id, $per);

    
    $objPer = new PreguntasrespuestasPgDAO();
    $p = $objPer->queryEmpleadoPregunta($_GET['caso']);
    print_r($p);
    $respuesta1 = $obj->insert($pregunta, $idEstado, $id, $p[0]['idpersonas']);
    
    if ($respuesta && $respuesta1) {
        $mail = new Mail("" . $p[0]['nombres'] . " " . $p[0]['apellidos'], "" . $p[0]['correo'], "Te han respondido una pregunta!", "Desde la aplicacion te han enviado la siguiente respuesta: " . $_POST["respuesta"] . "");
        $mail->configurarCorreoOrigen("seanvibo@gmail.com", "Ag0sto04");
        $mail->enviarCorreo();
        echo "<script>alert('Enviado correctamente!')</script>";
        echo '<meta http-equiv="Refresh" content="0;URL=../vista/crear/ResponderPregunta.php?caso='.$_GET['caso'].'">';
    } else {
        echo "<script>alert('Error en el Envio!')</script>";
        echo '<meta http-equiv="Refresh" content="0;URL=../vista/crear/ResponderPregunta.php?caso='.$_GET['caso'].'">';
    }
} else {
    echo 'No entre';
}
