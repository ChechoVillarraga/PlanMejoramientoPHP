<?php

require_once '../modelo/Login.php';
$msg = '';


if (isset($_POST['login'])) {
    $nuevoSingleton = Login::singletonLogin();
    $correoE = filter_input(INPUT_POST, 'correoE');
    $password = filter_input(INPUT_POST, 'clave');
    $usuario = $nuevoSingleton->validarUsuario($correoE, $password);
    

    if ($usuario == true) {
//        echo "<script>alert('Vamos bien!')</script>";
        header("location: ../vista/crear/index.php");
    } else {
//        header("location: ../vista/index.php");
//        $msg= "<script>alert('Clave o Correo Electronico incorrecto. Intente de nuevo!')</script>";
//        header("location: ../vista/index.php?id=$msg");
        echo "<script>alert('Clave o Correo Electronico incorrecto. Intente de nuevo!')</script>";
        echo '<meta http-equiv="Refresh" content="0;URL=../vista/index.php">';
    }
}
?>