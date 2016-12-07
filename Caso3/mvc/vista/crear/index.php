<?php
if (!isset($_SESSION)) {
    session_start();
}
if (!empty($_SESSION['idPersonas'])) {
    $title = 'Bienvenido!';

    include_once '../templates/navBar_1.php';
    ?>
    <STYLE>
        .imagenFondo{
            opacity: 0.5;
            width: 100%;
        }
    </style>
    <div class="container">
        <DIV class="col-lg-12 col-md-12 col-sm-12 col-xs-12 imagenFondo">
            <IMG src='../images/inicioEmpleado.png' alt="Imagen el Pregunton"  class="center-block "/>
        </DIV>
    </div>
    <?php
    include_once '../templates/bootom.php';
//        } 
} else {

    header("Location: ../index.php");
}
?>