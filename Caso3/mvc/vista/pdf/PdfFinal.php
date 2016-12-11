<?php

require('../../servicios/phpToPDF/phpToPDF.php');
require('../../controlador/estadisticaPdfController.php');
$objEstadistica = new estadisticaPdfController();
$texto=$objEstadistica->generarTexto();
$textoHtml='<html>
    <head>
        <meta charset="UTF-8">
        <title>Generar Pdf</title>
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
                        <li><a href="../crear/crearCategoria.php">Servicios</a></li>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>¿ Preguntas ?</b> <span class="caret"></span></a>
                                <ul id="login-dp" class="dropdown-menu">
                                    <li><a href="../crear/enviarPregunta.php">Registrar Pregunta</a></li>
                                    <li><a href="../consultar/consultarPreguntas.php">Consultar Respuestas</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>¿ Categorias ?</b> <span class="caret"></span></a>
                                <ul id="login-dp" class="dropdown-menu">
                                    <li><a href="../crear/crearCategoria.php">Registrar nueva Categoria</a></li>
                                    <li><a href="../consultar/consultarCategorias.php">Consultar Categorias</a></li>
                                </ul>
                            </li>
                        </ul>
                    </ul>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../../controlador/LogoutController.php">Cerrar Sesión</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container">
        <H1>Informe: Preguntas mas solicitadas<H1>
<table class="table">
                    <thead>
                        <tr class="filters">
                            <th>Codigo Caso</th>
                            <th>Pregunta</th>
                            <th>Descripción</th>
                            <th>Area Correspondiente</th>
                            <th>Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
'.$texto.'
                    </tbody>
                </table>        
</div>
<style>
    .footer-distributed{
        bottom: 0px;
        background-color: #292c2f;
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
        box-sizing: border-box;
        width: 100%;
        text-align: left;
        font: normal 16px sans-serif;

        padding: 45px 50px;
        margin-top: 0px;
    }

    .footer-distributed .footer-left p{
        color:  #8f9296;
        font-size: 14px;
        margin: 0;
    }

    /* Footer links */

    .footer-distributed p.footer-links{
        font-size:18px;
        font-weight: bold;
        color:  #ffffff;
        margin: 0 0 10px;
        padding: 0;
    }

    .footer-distributed p.footer-links a{
        display:inline-block;
        line-height: 1.8;
        text-decoration: none;
        color:  inherit;
    }

    .footer-distributed .footer-right{
        float: right;
        margin-top: 6px;
        max-width: 180px;
    }

    .footer-distributed .footer-right a{
        display: inline-block;
        width: 35px;
        height: 35px;
        background-color:  #33383b;
        border-radius: 2px;

        font-size: 20px;
        color: #ffffff;
        text-align: center;
        line-height: 35px;

        margin-left: 3px;
    }


    @media (max-width: 600px) {

        .footer-distributed .footer-left,
        .footer-distributed .footer-right{
            text-align: center;
        }

        .footer-distributed .footer-right{
            float: none;
            margin: 0 auto 20px;
        }

        .footer-distributed .footer-left p.footer-links{
            line-height: 1.8;
        }
    }

</style>
<footer class="footer-distributed">

    <div class="footer-right">

        <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
        <a href="https://github.com/ChechoVillarraga/PlanMejoramientoPHP"><i class="fa fa-github"></i></a>

    </div>

    <div class="footer-left">

        <p class="footer-links">
            <a href="http://localhost/PlanMejoramientoPHP/Caso3/index.php">Inicio</a>
            ·
            <a href="http://localhost/PlanMejoramientoPHP/Caso3/mvc/vista/servicios.php">Servicios</a>
            ·
            <a href="http://localhost/PlanMejoramientoPHP/Caso3/mvc/vista/contactenos.php">Contactenos</a>
            ·
        </p>

        <p>SergioVillarraga &copy; 2016</p>
    </div>

</footer>
<script src="https://code.jquery.com/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../script/filtroMulticriterio.js" type="text/javascript"></script>
</body>
</html>';

$pdf_options = array(
  "source_type" => 'html',
  "source" => $textoHtml,
  "action" => 'save',
  "save_directory" => '/PlanMejoramientoPHP/Caso3/mvc/vista/pdf/',
  "file_name" => 'html_01.pdf');

// CALL THE phpToPDF FUNCTION WITH THE OPTIONS SET ABOVE
phptopdf($pdf_options);

// OPTIONAL - PUT A LINK TO DOWNLOAD THE PDF YOU JUST CREATED
echo ("<a href='html_01.pdf'>Download Your PDF</a>");
?>