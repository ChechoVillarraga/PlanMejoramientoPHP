<?php
if (!isset($_SESSION)) {
    session_start();
}

if ($_SESSION['roles_idroles'] == 2 || $_SESSION['roles_idroles'] == 3) {
    $title = 'Crear Usuario!';

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
    <STYLE>
        .text-right{
            background-color: graytext;

        }
        .contenedores{
            margin-bottom: 20px;
            font-family: sans-serif;
            font-size: 18px;
            background-color: graytext;
        }
    </style>
    <div class="container">
        <form class="form-horizontal" method="POST" action="../../controlador/EmpleadoNuevoController.php">
            <fieldset>

                <!-- Form Name -->
                <legend>Nuevo Empleado</legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label contenedores" for="idpersona">Documento Identidad</label>  
                    <div class="col-md-4">
                        <input id="idpersona" name="idpersona" type="text" placeholder="solos numeros" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label contenedores" for="nombres">Nombres completos:</label>  
                    <div class="col-md-4">
                        <input id="nombres" name="nombres" type="text" placeholder="" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label contenedores" for="apellidos">Apellidos completos:</label>  
                    <div class="col-md-4">
                        <input id="apellidos" name="apellidos" type="text" placeholder="" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label contenedores" for="correo">Correo electronico:</label>  
                    <div class="col-md-4">
                        <input id="correo" name="correo" type="text" placeholder="" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                    <label class="col-md-4 control-label contenedores" for="clave">Contraseña:</label>
                    <div class="col-md-4">
                        <input id="clave" name="clave" type="password" placeholder="" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label contenedores" for="confirmar">Confirme su clave</label>  
                    <div class="col-md-4">
                        <input id="confirmar" name="confirmar" type="password" placeholder="" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Button (Double) -->
                <div class="form-group">
                    <label class="col-md-4 control-label contenedores" for="button1id"></label>
                    <div class="col-md-8">
                        <button id="button1id" name="guardar" class="btn btn-success">Guardar</button>
                        <button id="button2id"  class="btn btn-danger">Limpiar Campos</button>
                    </div>
                </div>

            </fieldset>
        </form>

    </div>
    <?php
    include_once '../templates/bootom.php';
//        } 
} else {

    header("Location: ../index.php");
}
?>