<?php

session_start();
require_once '../modelo/include_dao.php';
require_once '../servicios/MailGildardou/Mail.php';
if (isset($_POST["responder"]) || (isset($_POST["reenviar"]))) {
    $idEstado = "6";

    $idCasos = $_GET['caso'];

    $pregunta = $_POST["respuesta"];

    $per = $_POST['coor'];

    $obj = new PreguntasrespuestasPgDAO();
    $respuesta = $obj->insert($pregunta, $idEstado, $idCasos, $per);

    $per = $_SESSION['idPersonas'];
    $respuesta1 = $obj->insert($pregunta, $idEstado, $idCasos, $per);
    
    $objp= new PersonasPgDAO();
    $p = $objp->queryById($_POST['coor']);

    if ($respuesta&&$respuesta1) {
        $mail = new Mail("".$p[0]['rol']." ".$p[0]['nombres']." ".$p[0]['apellidos'], "".$p[0]['correo'], "Te han enviado una pregunta!", "Desde la aplicacion te han enviado la siguiente pregunta: " . $_POST["respuesta"] . "");
        $mail->configurarCorreoOrigen("seanvibo@gmail.com", "Ag0sto04");
        $mail->enviarCorreo();
        echo "<script>alert('Enviado correctamente!')</script>";
        echo '<meta http-equiv="Refresh" content="0;URL=../vista/crear/ResponderPregunta.php?caso=' . $idCasos . '">';
    } else {
        echo "<script>alert('Error en el Envio!')</script>";
        echo '<meta http-equiv="Refresh" content="0;URL=../vista/crear/ResponderPregunta.php?caso=' . $idCasos . '">';
    }
} else {
    echo 'No entre';
}
