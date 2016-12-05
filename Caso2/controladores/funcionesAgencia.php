<?php

require_once(realpath(dirname(__FILE__)) . '/../Agencia1/Agencia.php');
/**
 * Created by PhpStorm.
 * User: Sergio
 * Date: 01/12/2016
 * Time: 21:03
 */
$objAgencia = new Agencia();
if (isset($_POST['0'])) {

    if (empty($_POST['precio'])) {
        echo "estoy vacio";
    } else {
        $objAgencia->inmueblesVenta($_POST['precio']);
    }
} else if (isset($_POST['1'])) {

    if (empty($_POST['area'])) {
        echo "estoy vacio";
    } else {
        $objAgencia->localesSegundaMano($_POST['area']);
    }
} else if (isset($_POST['2']) && ($_POST['2'] != null)) {

    $objAgencia->SolaresRusticos();
} else if (isset($_POST['3']) && ($_POST['3'] != null)) {
    
}    