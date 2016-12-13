<?php
if ((!isset($_SESSION)) || (!session_id())) {
    session_start();
}

if ($_SESSION['roles_idroles'] == 1 || $_SESSION['roles_idroles'] == 2 || $_SESSION['roles_idroles'] == 3 && $_GET["id"] == "") {
    $title = 'Responder Pregunta!';

    include_once '../templates/navBar_1.php';
    ?>
    <link href="../css/filtroMulticriterio.css" rel="stylesheet" type="text/css"/>
    <STYLE>
        .imagenFondo{
            opacity: 0.5;
            width: 100%;
        }
        .control-label{
            background-color: #337ab7;
            color: inherit;
        }
        .legenda{
            background-color: #337ab7;
            color: white;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
        }
    </style>
    <DIV class="container-fluid">
        <div class="row">
            <div class="panel panel-primary filterable">
                <div class="panel-heading">
                    <h3 class="panel-title">Preguntas y Respuestas</h3>
                    <div class="pull-right">
                        <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr class="filters">
                            <th><input type="text" class="form-control" placeholder="Creacion del Caso" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Fecha Envio" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Pregunta" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Categoria" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Estado de la Pregunta" disabled></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once '../../controlador/PreguntasPorCasoController.php';
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <?php
        if ($_SESSION['roles_idroles'] == 2 || $_SESSION['roles_idroles'] == 3) {
            require_once '../../controlador/ReenviadorFormController.php';
            ?>
            <fieldset>

                <!-- Form Name -->
                <legend class=" legenda">Reenvia a un Coordinador de otra area!</legend>

                <!-- Button Drop Down -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="coordinador">Selecciona un Coordinador:</label>
                    <div class="col-md-4">
                        <select class="form-control" id="coordinador" name="coor">
                            <option value="">Selecciona...</option>
                            <?php
                            require_once '../../controlador/dropDownPersonasController.php';
                            ?>
                        </select>
                    </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="respuesta">Respuesta:</label>
                    <div class="col-md-4">                     
                        <textarea class="form-control" id="respuesta" name="respuesta" required=""></textarea>
                    </div>
                </div>

                <!-- Button (Double) -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="enviar"></label>
                    <div class="col-md-8">
                        <button id="responder" name="responder" class="btn btn-success">Reenviar</button>
                        <button id="cancelar" name="cancelar" class="btn btn-danger">Limpiar</button>
                    </div>
                </div>

            </fieldset>
        </form>


        </DIV>




        <?php
    }
    include_once '../templates/bootom.php';
} else {

    header("Location: ../index.php");
}    