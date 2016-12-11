<?php
if (!isset($_SESSION)) {
    session_start();
}

if ($_SESSION['roles_idroles']==2||$_SESSION['roles_idroles']==3) {
    $title = 'Crear Tags!';

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
                <legend>Crear Tags</legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Tags</label>  
                    <div class="col-md-4">
                        <input id="textinput" name="textinput" type="text" placeholder="ingrese texto" class="form-control input-md" required="">
                    </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Descripcion Tags</label>  
                    <div class="col-md-4">
                        <input id="textinput" name="textinput" type="text" placeholder="ingrese texto" class="form-control input-md" required="">
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