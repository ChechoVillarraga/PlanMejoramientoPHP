<?php

require_once(realpath(dirname(__FILE__)) . '/../Agencia1/Superficie.php');
require_once(realpath(dirname(__FILE__)) . '/../Agencia1/Alquiler.php');

/**
 * @access public
 * @author Sergio
 * @package Agencia1
 */
class PlazaDeGarage extends Superficie implements Alquiler {

    //Orden de datos:
    //codigo, ubicacion, precio, area, precioPorHora, precioMetro2, estadoAlquiler
    private $nombreCampos = array("Codigo", "Ubicacion", "Area", "Precio", "TipoInmueble", "Precio Por Hora", "Precio por Metro2", "Estado Alquiler");
    private $listadoLocales = array(
        array(1, "Usaquen", 200, 5000000, "Plaza de Garage", 150000, 1500000, "Alquilado"),
        array(2, "Floresta", 122, 18000000, "Plaza de Garage", 160000, 1700000, "No alquilado"),
        array(3, "Alqueria", 555, 15000000, "Plaza de Garage", 170000, 1200000, "Alquilado"),
        array(4, "Claret", 986, 25000000, "Plaza de Garage", 1580000, 1600000, "No alquilado"),
        array(5, "Cedritos", 343, 17000000, "Plaza de Garage", 190000, 1100000, "No alquilado")
    );
    private $precioPorHora;
    private $estadoAlquiler;
    private $precio;

    public function cargarDatos($codigoVivienda) {
        $codigoVivienda -= 1;
        $this->set_codigoSuperficie($this->listadoLocales[$codigoVivienda][0]);
        $this->set_ubicacion($this->listadoLocales[$codigoVivienda][1]);
        $this->set_area($this->listadoLocales[$codigoVivienda][2]);
        $this->set_precioPorHora($this->listadoLocales[$codigoVivienda][3]);
        $this->set_precioPorMetro($this->listadoLocales[$codigoVivienda][4]);
        $this->setEstadoAlquiler($this->listadoLocales[$codigoVivienda][5]);
        $this->setPrecio($this->listadoLocales[$codigoVivienda][6]);
    }

    public function anadeAlquilerInmueble($in) {
        // Not yet implemented
    }

    public function get_precioPorHora() {
        return $this->precioPorHora;
    }

    public function set_precioPorHora($precioPorHora) {
        $this->precioPorHora = $precioPorHora;
    }

    public function getEstadoAlquiler() {
        return $this->estadoAlquiler;
    }

    public function setEstadoAlquiler($estadoAlquiler) {
        $this->estadoAlquiler = $estadoAlquiler;
    }

    /**
     * @return array
     */
    public function getListadoLocales() {
        return $this->listadoLocales;
    }

    /**
     * @param array $listadoLocales
     */
    public function setListadoLocales($listadoLocales) {
        $this->listadoLocales = $listadoLocales;
    }

    /**
     * @return mixed
     */
    public function getPrecio() {
        return $this->precio;
    }

    /**
     * @param mixed $precio
     */
    public function setPrecio($precio) {
        $this->precio = $precio;
    }

}

?>