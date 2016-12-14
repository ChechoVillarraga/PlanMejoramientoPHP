
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="../css/NavBarEstilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>


        <nav class="navbar navbar-default navbar-inverse" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../crear/index.php">El Preguntón</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>¿ Preguntas ?</b> <span class="caret"></span></a>
                                <ul id="login-dp" class="dropdown-menu">
                                    <?php
                                    if ($_SESSION['roles_idroles'] == 1 || $_SESSION['roles_idroles'] == 3) {
                                        echo'<li><a href="../crear/enviarPregunta.php">Registrar Pregunta</a></li>';
                                    }
                                    ?>
                                    <li><a href="../consultar/consultarPreguntas.php">Consultar Respuestas</a></li>
                                    <?php
                                    if ($_SESSION['roles_idroles'] == 2 || $_SESSION['roles_idroles'] == 3) {
                                        echo '<li><a href="../consultar/consultarTags.php">Consultar Tags</a></li>';
                                        echo '<li><a href="../crear/crearTags.php">Registrar Tag</a></li>';
                                    }
                                    ?>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>¿ Categorias ?</b> <span class="caret"></span></a>
                                <ul id="login-dp" class="dropdown-menu">
                                    <?php
                                    if ($_SESSION['roles_idroles'] == 2 || $_SESSION['roles_idroles'] == 3) {
                                        echo '<li><a href="../crear/crearCategoria.php">Registrar nueva Categoria</a></li>';
                                    }
                                    ?>
                                    <li><a href="../consultar/consultarCategorias.php">Consultar Categorias</a></li>
                                </ul>
                            </li>
                            <?php
                            if ($_SESSION['roles_idroles'] == 2 || $_SESSION['roles_idroles'] == 3) {
                                echo '<li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>¿ Empleados ?</b> <span class="caret"></span></a>
                                <ul id="login-dp" class="dropdown-menu">
                                        <li><a href="../crear/crearEmpleado.php">Registrar nuevo Empleado</a></li>
                                    <li><a href="../consultar/consultarEmpleados.php">Consultar Empleados</a></li>
                                </ul>
                            </li>';
                            }
                            ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>¿ Datos de Sesión ?</b> <span class="caret"></span></a>
                                <ul id="login-dp" class="dropdown-menu">
                                    <?php
                                    echo '<li>Cedula: '.$_SESSION["idPersonas"].'</li>';
                                    echo '<li>Nombres: '.$_SESSION["nombres"].'</li>';
                                    echo '<li>Apellidos: '.$_SESSION["apellidos"].'</li>';
                                    echo '<li>Correo: '.$_SESSION["correo"].'</li>';
                                    echo '<li>Clave: '.$_SESSION["clave"].'</li>';
                                    echo '<li>Rol: '.$_SESSION["roles_idroles"].'</li>';
                                    echo '<li>Area: '.$_SESSION["area_idarea"].'</li>';
                                    ?>
                                </ul>
                            </li>
                        <?php
                        if ($_SESSION['roles_idroles'] == 2 || $_SESSION['roles_idroles'] == 3) {
                            echo '<li><a href="../pdf/CircularPDF.php">Generar Reporte Pdf</a></li>';
                        }
                        ?>
                        </ul>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../../controlador/LogoutController.php">Cerrar Sesión</a></li>
                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>