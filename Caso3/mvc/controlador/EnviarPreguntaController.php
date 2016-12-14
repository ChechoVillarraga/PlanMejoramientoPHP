<?php

session_start();
require_once '../servicios/MailGildardou/Mail.php';
require_once '../modelo/include_dao.php';
if (isset($_POST["enviar"])) {
    $objCaso = new CasosPgDAO();
    $obj = new PreguntasrespuestasPgDAO();
    $objPP = new PersonaspreguntasPgDAO();

    $pregunta = $_POST["pregunta"]; //PREGUNTA DE PREGUNTASSSS
    $idEstado = "3"; //ESTADO DE LA PREGUNTA QUE POR DEFAULT ES "ENVIADA AL COORDINADOR
    $categoria = $_POST['cat']; //CATEGORIA PARA LA PREGUNTA

    $respuesta = $obj->enviarPregunta($pregunta, $idEstado, $categoria); //VALIDANDO LA OPERACION 

    $respuestaCaso = $objCaso->insert(); //Creando un caso para ligarlo a la pregunta

    $idCasos = $objCaso->ultimoId(); //CALVE PRIMARIA DE LOS CASOS
    $idP = $obj->queryMaxId(); //llave primaria de la ultima pregunta que se creo;
    $idPregun = $idP[0]['max']; //solo se pasa el valor y no todo el arreglo.

    $per = $_POST['coor'];
    $respuestaDos = $objPP->insert($idCasos[0]['max'], $idPregun, $per);

    $per = $_SESSION['idPersonas'];
    $respuestaTres = $objPP->insert($idCasos[0]['max'], $idPregun, $per);

    $p = array();
    $objp = new PersonasPgDAO;

    $p = $objp->queryById($_POST['coor']);
    

    if ($respuesta == 1 && $respuestaCaso == 1 && $respuestaDos == 1 && $respuestaTres == 1) {
        $mail = new Mail("".$p[0]['rol']." ".$p[0]['nombres']." ".$p[0]['apellidos'], "".$p[0]['correo'], "Te han enviado una pregunta!", "Desde la aplicacion te han enviado la siguiente pregunta: " . $_POST["pregunta"] . "");
        $mail->configurarCorreoOrigen("seanvibo@gmail.com", "Ag0sto04");
        $mail->enviarCorreo();
        echo "<script>alert('Enviado correctamente!')</script>";
        echo '<meta http-equiv="Refresh" content="0;URL=../vista/crear/enviarPregunta.php">';
    } else {
        echo "<script>alert('Error en el Envio!')</script>";
        echo '<meta http-equiv="Refresh" content="0;URL=../vista/crear/enviarPregunta.php">';
    }
} else {
    echo 'No entre';
}
