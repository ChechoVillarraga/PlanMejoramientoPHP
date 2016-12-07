<?php

session_start();
unset($_SESSION['idPersonas']);
unset($_SESSION['nombres']);
unset($_SESSION['apellidos']);
unset($_SESSION['correo']);
unset($_SESSION['clave']);
unset($_SESSION['roles_idroles']);
unset($_SESSION['area_idarea']);
unset($_SESSION['valid']);
unset($_SESSION['timeout']);


echo "<script>alert('Haz finalizado sesion correctamente!')</script>";
echo '<meta http-equiv="Refresh" content="0;URL=../vista/index.php">';
?>