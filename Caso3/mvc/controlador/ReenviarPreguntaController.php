<?php

session_start();
require_once '../modelo/include_dao.php';
require_once '../servicios/MailGildardou/Mail.php';
if (isset($_POST["responder"]) || (isset($_POST["reenviar"]))) {
    $objPer = new PreguntasrespuestasPgDAO();
    $objPP = new PersonaspreguntasPgDAO();
    $objC = new CasosPgDAO();
    $objp = new PersonasPgDAO;

    $pregunta = $_POST["respuesta"]; //toma de la vista la respuesta que se agrego en su casilla
    $idEstado = "6"; //Pregunta enviada a Coordinador
    $categoria = $_GET["cat"]; //Siempre se mandara con estado Respuesta Reenviada a Empleado
    $r0 = $objPer->insert($pregunta, $idEstado, $categoria); //Genera la insersion de la pregunta

    $caso = $_GET['caso']; //Se arrastra el caso desde el boton en la lista de correos por URL
    $idPregun = $objPer->queryMaxId(); //La id de la ultima pregunta
    $pregun = $idPregun[0]['max'];
    $per = $_SESSION['idPersonas']; //Captura la PK del usuario iniciado
    $r1 = $objPP->insert($caso, $pregun, $per); //ingresar datos del primer usuario en la tabla intermedia

    $pers = $objp->queryById($_POST['coor']); //Trae los datos del Coordinador
    $per = $_POST['coor']; //el coordinador seleccionado entra a ser el segundo
    $r2 = $objPP->insert($caso, $pregun, $per); //El segundo usuario en la tabla intermedia

    if ($r0 && $r1 && $r2) {
        $mail = new Mail("" . $pers[0]['nombres'] . " " . $pers[0]['apellidos'], "" . $pers[0]['correo'], "Te han respondido una pregunta!", "Desde la aplicacion te han enviado la siguiente respuesta: " . $_POST["respuesta"] . "");
        $mail->configurarCorreoOrigen("seanvibo@gmail.com", "Ag0sto04");
        $mail->enviarCorreo();
        echo "<script>alert('Enviado correctamente!')</script>";
        echo '<meta http-equiv="Refresh" content="0;URL=../vista/crear/ReenviaArCoordinador.php?caso=' . $_GET['caso'] . '&cat=' . $_GET["cat"] . '">';
    } else {
        echo "<script>alert('Error en el Envio!')</script>";
        echo '<meta http-equiv="Refresh" content="0;URL=../vista/crear/ReenviaArCoordinador.php?caso=' . $_GET['caso'] . '&cat=' . $_GET["cat"] . '">';
    }
} else {
    echo 'No entre';
}
