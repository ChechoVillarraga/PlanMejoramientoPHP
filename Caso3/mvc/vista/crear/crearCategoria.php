<?php
if (!isset($_SESSION)) {
    session_start();
}
if (!empty($_SESSION['idPersonas'])) {
    $title = 'Crear Categoria!';

    include_once '../templates/navBar_1.php';
    ?>
    <STYLE>
        .imagenFondo{
            opacity: 0.5;
            width: 100%;
        }
    </style>
    <DIV class="container-fluid"
         <form class="form-horizontal">
            <fieldset>

                <!-- Form Name -->
                <legend>Crear una nueva Categoria</legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Categoria</label>  
                    <div class="col-md-4">
                        <input id="textinput" name="textinput" type="text" placeholder="ingrese texto" class="form-control input-md" required="">
                        <span class="help-block">Solo Texto</span>  
                    </div>
                </div>

                <!-- Button Drop Down -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="buttondropdown">Button Drop Down</label>
                    <div class="col-md-4">
                        <div class="input-group">
                            <input id="buttondropdown" name="buttondropdown" class="form-control" placeholder="placeholder" type="text">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    Action
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#">Option one</a></li>
                                    <li><a href="#">Option two</a></li>
                                    <li><a href="#">Option three</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textarea">Text Area</label>
                    <div class="col-md-4">                     
                        <textarea class="form-control" id="textarea" name="textarea">default text</textarea>
                    </div>
                </div>

                <!-- Button (Double) -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="crear"></label>
                    <div class="col-md-8">
                        <button id="crear" name="crear" class="btn btn-success">Crear</button>
                        <button id="Limpiar" name="Limpiar" class="btn btn-danger">Limpiar</button>
                    </div>
                </div>

            </fieldset>
        </form>



        <?php
        include_once '../templates/bootom.php';
//        } 
    } else {

        header("Location: ../index.php");
    }
    ?>