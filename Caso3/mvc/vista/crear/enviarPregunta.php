<?php
if (!isset($_SESSION)) {
    session_start();
}

if ($_SESSION['roles_idroles'] == 1 || $_SESSION['roles_idroles'] == 2 || $_SESSION['roles_idroles'] == 3) {
    $title = 'Enviar Pregunta!';

    include_once '../templates/navBar_1.php';
    ?>
    <STYLE>
        .imagenFondo{
            opacity: 0.5;
            width: 100%;
        }
    </style>
    <DIV class="container-fluid">

        <form class="form-horizontal" action="../../controlador/EnviarPreguntaController.php" method="POST">
            <fieldset>

                <!-- Form Name -->
                <legend>Enviale una pregunta al Coordinador!</legend>
                <!-- Textarea -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="pregunta">Pregunta:</label>
                    <div class="col-md-4">                     
                        <textarea class="form-control" id="pregunta" name="pregunta"></textarea>
                    </div>
                </div>

                <!-- Button Drop Down -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="categoria">Categoria:</label>
                    <div class="col-md-4">
                        <select class="form-control" id="categoria" name="cat">
                            <option value="">Selecciona...</option>
                            <?php
                            require_once '../../controlador/dropDownCategoriasController.php';
                            ?>
                        </select>
                    </div>
                </div>


                <!-- Select Multiple -->
<!--                <div class="form-group">
                    <label class="col-md-4 control-label" for="tags">Tags de preguntas:</label>
                    <div class="col-md-4">
                        <select id="tags" name="tags" class="form-control" multiple="multiple" style="height: 200px;">
                            <?php
//                            require_once '../../controlador/selectMultipleCategoriasController.php';
                            ?>
                        </select>
                    </div>
                </div>-->

                <!-- Button (Double) -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="enviar"></label>
                    <div class="col-md-8">
                        <button id="enviar" name="enviar" class="btn btn-success">Enviar</button>
                        <button id="cancelar" name="cancelar" class="btn btn-danger">Limpiar</button>
                    </div>
                </div>

            </fieldset>
        </form>


    </DIV>




    <?php
    include_once '../templates/bootom.php';
//        } 
} else {

    header("Location: ../index.php");
}