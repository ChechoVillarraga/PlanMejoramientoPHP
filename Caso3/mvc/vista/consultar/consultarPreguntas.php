<?php
if ((!isset($_SESSION)) || (!session_id())) {
    session_start();
}

if ($_SESSION['roles_idroles'] == 1 || $_SESSION['roles_idroles'] == 3 || $_SESSION['roles_idroles'] == 2) {
    $title = 'Consultar Preguntas!';

    include_once '../templates/navBar_1.php';
    ?>
    <link href="../css/filtroMulticriterio.css" rel="stylesheet" type="text/css"/>
    <STYLE>
        .imagenFondo{
            opacity: 0.5;
            width: 100%;
        }
    </style>
    <?php
    ?>
    <div class="container">
        <?php
        if ($_SESSION['roles_idroles'] == 1 || $_SESSION['roles_idroles'] == 3) {
        echo '<a href="../crear/enviarPregunta.php" align="center" class="btn btn-primary">¿Deseas enviar una pregunta?!</a>';
         }
        ?>
        <div class="row">
            <div class="panel panel-primary filterable">
                <div class="panel-heading">
                    <h3 class="panel-title">Preguntas realizadas por Empleados</h3>
                    <div class="pull-right">
                        <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                    </div>
                </div>

                        <?php
                        require_once '../../controlador/PreguntasController.php';
                        ?>

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