<?php
if (!isset($_SESSION)) {
    session_start();
}

if ($_SESSION['roles_idroles'] == 1 || $_SESSION['roles_idroles'] == 2 || $_SESSION['roles_idroles'] == 3) {
    $title = 'Envio de Circular!';

    include_once '../templates/navBar_1.php';
    ?>
    <STYLE>
        .imagenFondo{
            opacity: 0.5;
            width: 100%;

        }
    </style>
    <div class="container">

        <h2 style="color: #FFFFFF">Envio de Circulares a todos los colaboradores!</h2>
        <div class="container" >

            <form method=GET target="_blank" action="../../controlador/CtlPdf.php">
             <button id="responder" name="responder" class="btn btn-success">Generar Reporte</button>

            </form>
            <div style="background-color: rgba(255,255,266,0.8); padding: 30px; padding-bottom: 10px; border-radius: 10px;margin: 30px; height: 450px; width: 450px;">
                <form action="../../controlador/GeneracionCircular.php" method="post">
                    <label>Asunto:</label>
                    <input name="asunto" type="text" id="asunto" class="form-control" required>
                    <label>Archivo adjunto:</label>
                    <input type="file" name="adjunto" class="form-control">
                    <label>Mensaje:</label>
                    <textarea name="mensaje" cols="50" rows="4" id="mensaje" class="form-control" required></textarea>
                    <br/>

                    <button class="btn btn-success">Enviar correo</button>
                    <input type="hidden" name="phpmailer" class="form-control">
                </form>
            </div>
        </div>

    </div>
    <?php
    include_once '../templates/bootom.php';
//        } 
} else {

    header("Location: ../index.php");
}
?>