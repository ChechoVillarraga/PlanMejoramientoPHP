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
                <a href="../consultar/consultarPreguntas.php" align="center" class="btn btn-info">Preguntas Enviadas!</a>
            <a href="../consultar/consultarRespuestas.php" align="center" class="btn btn-info">Respuestas recibidas!</a>
        
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Preguntas realizadas por Empleados</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>

            <form action='' method='post'>
                <table class='table'>
                    <thead>
                        <tr class='filters'>
                            <th><input type='text' class='form-control' placeholder='Creacion del Caso' disabled></th>
                            <th><input type='text' class='form-control' placeholder='Fecha Envio' disabled></th>
                            <th><input type='text' class='form-control' placeholder='Pregunta' disabled></th>
                            <th><input type='text' class='form-control' placeholder='Categoria' disabled></th>
                            <th><input type='text' class='form-control' placeholder='Estado de la Pregunta' disabled></th>
                            <th><input type='text' class='form-control' placeholder='' disabled></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        require_once '../../controlador/PreguntasController.php';
                        ?>
                    </tbody>
                </table>
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