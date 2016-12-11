<?php

require_once '../../modelo/include_dao.php';
if (isset($_POST["guardar"])) {

    if ($_POST["clave"] != $_POST["confirmar"]) {
        $persona = array();
        $objPersonaEntity = new Persona();
        $objPersonaEntity->setIdPersonas($_POST["idpersona"]);
        $objPersonaEntity->setNombres($_POST["nombres"]);
        $objPersonaEntity->setApellidos($_POST["apellidos"]);
        $objPersonaEntity->setCorreo($_POST["correo"]);
        $objPersonaEntity->setClave($_POST["clave"]);
        $objPersonaEntity->setRolesIdRoles("1");
        $objPersonaEntity->setAreaIdArea($_SESSION['area_idarea']);


        $objPersonaDAO = new PersonasPgDAO();
        if ($objPersonaDAO->insert($objPersonaEntity)) {
            echo "<script>alert('Empleado creado correctamente!')</script>";
            echo '<meta http-equiv="Refresh" content="0;URL=../vista/crear/crearEmpleado.php">';
        } else {
            echo "<script>alert('Error en la creacion del usuario. ¿Usuario ya existe?!')</script>";
            echo '<meta http-equiv="Refresh" content="0;URL=../vista/crear/crearEmpleado.php">';
        }
    } else {
        echo "<script>alert('Las contraseñas no coinciden!!!!!!!!!!!!!!!!!!!')</script>";
        echo '<meta http-equiv="Refresh" content="0;URL=../vista/crear/crearEmpleado.php">';
    }
}