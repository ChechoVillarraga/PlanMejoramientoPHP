<?php
if (!isset($_SESSION)) {
    session_start();
}
if (!empty($_SESSION['idPersonas'])) {
    $title = 'Enviar Correo!';

    include_once '../templates/navBar_1.php';
    ?>
    <STYLE>
        .imagenFondo{
            opacity: 0.5;
            width: 100%;
        }
    </style>
    <DIV class="container-fluid">

        <form class="form-horizontal" action="">
            <fieldset>

                <!-- Form Name -->
                <legend>Enviale una pregunta al Coordinador!</legend>

                <!-- Textarea -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="pregunta">Pregunta:</label>
                    <div class="col-md-4">                     
                        <textarea class="form-control" id="pregunta" name="pregunta">Escribe tu pregunta...</textarea>
                    </div>
                </div>

                <!-- Button Drop Down -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="categoria">Categoria:</label>
                    <div class="col-md-4">
                        <div class="input-group">
                            <input id="categoria" name="categoria" class="form-control" placeholder="selecciona..." type="text" required="">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">

                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <?php 
                                        require_once '../../controlador/vistaPreguntasControlador.php';
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Select Multiple -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="tags">Tags de preguntas:</label>
                    <div class="col-md-4">
                        <select id="tags" name="tags" class="form-control" multiple="multiple">
                            <option value="1">Option one</option>
                            <option value="2">Option two</option>
                        </select>
                    </div>
                </div>

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
?>