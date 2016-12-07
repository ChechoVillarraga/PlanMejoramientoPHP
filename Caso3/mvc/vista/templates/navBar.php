
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
//require_once '../controlador/ControllerLogin.php';
?>
<html>
    <head>

        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="css/NavBarEstilos.css" rel="stylesheet" type="text/css"/>
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
                    <a class="navbar-brand" href="../vista/index.php">El Preguntón</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="../vista/servicios.php">Servicios</a></li>
                        <li><a href="../vista/contactenos.php">Contactenos</a></li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Ingresar</b> <span class="caret"></span></a>
                            <ul id="login-dp" class="dropdown-menu">
                                <li>
                                    <div class="row">
                                        <div class="col-md-12">
                                            Ingresar al Sistema

                                            <form 
                                                class="form" 
                                                role="form" 
                                                method="post" 
                                                accept-charset="UTF-8" 
                                                action="../controlador/LoginController.php" 
                                                id="login-nav">

                                                <div class="form-group">
                                                    <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                    <input type="text" class="form-control" id="correoE" name="correoE" placeholder="Correo Electronico" required>
                                                </div>

                                                <div class="form-group">
                                                    <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                    <input type="password" class="form-control" id="clave" name="clave" placeholder="Contraseña" required>
                                                    <!--<div class="help-block text-right"><a href="">HAY QUE HACER EL OLVIDO DE CONTRASEÑA ?</a></div>-->
                                                </div>

                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary btn-block" name="login">Ingresar</button>
                                                </div>

                                            </form>
                                            <?php
                                            $msg = null;
                                            if ($msg != null) {
                                                echo $_GET['msg'];
                                            }
                                            ?>
                                        </div>

                                        <div class="bottom text-center">
                                            ¿ Eres nuevo ? <a href="#"><b>Solicita un usuario a tu Coordinador</b></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>