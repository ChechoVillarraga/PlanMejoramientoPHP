<?php
if (!isset($_SESSION)) {
    session_start();
}

if ($_SESSION['roles_idroles'] == 1 || $_SESSION['roles_idroles'] == 2 || $_SESSION['roles_idroles'] == 3) {
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
        <DIV class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
            <?php
            if ($_SESSION['roles_idroles'] == 1) {
                echo '<IMG src="../images/inicioEmpleado.png" alt="Imagen el Pregunton"  class="center-block imagenFondo"/>';
            } else if ($_SESSION['roles_idroles'] == 2) {
                echo '<IMG src="../images/coordinador.png" alt="Imagen el Pregunton"  class="center-block imagenFondo"/>';
            } else if ($_SESSION['roles_idroles'] == 2) {
                echo '<IMG src="../images/administrador.png" alt="Imagen el Pregunton"  class="center-block imagenFondo"/>';
            }
            ?>
        </DIV>
    </div>
    <?php
    include_once '../templates/bootom.php';
//        } 
} else {

    header("Location: ../index.php");
}
?>