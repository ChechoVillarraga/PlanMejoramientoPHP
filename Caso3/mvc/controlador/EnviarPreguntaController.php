<?php

session_start();
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
    $idP = $obj->idPreguntas(); //llave primaria de la ultima pregunta que se creo;

    $respuestaDos = $objPP->insert($idCasos, $idP);

    if ($respuesta == 1 && $respuestaCaso == 1 && $respuestaDos == 1) {
        echo "<script>alert('Enviado correctamente!')</script>";
        echo '<meta http-equiv="Refresh" content="0;URL=../vista/crear/enviarPregunta.php">';
    } else {
        echo "<script>alert('Error en el Envio!')</script>";
        echo '<meta http-equiv="Refresh" content="0;URL=../vista/crear/enviarPregunta.php">';
    }
} else {
    echo 'No entre';
}
