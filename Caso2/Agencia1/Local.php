<?php

require_once(realpath(dirname(__FILE__)) . '/../Agencia1/Construccion.php');
require_once(realpath(dirname(__FILE__)) . '/../Agencia1/Alquiler.php');

/**
 * @access public
 * @author Sergio
 * @package Agencia1
 */
class Local extends Construccion implements Alquiler {

    //Orden de datos:
    private $nombreCampos = array("Codigo", "Ubicacion", "Area", "Precio", "TipoInmueble", "Precio Por Hora", "Precio por Metro2", "Tipo Mano", "Estado Alquiler");
    private $listadoLocales = array(
        array(1, "Usaquen", 200, 15000000,"Local", 150000, 1500000, "Segunda Mano", "Alquilado"),
        array(2, "Floresta", 122, 18000000, "Local", 160000, 1700000, "Primera Mano", "No alquilado"),
        array(3, "Alqueria", 555, 5000000, "Local", 170000, 1200000, "Primera Mano", "Alquilado"),
        array(4, "Claret", 986, 19000000, "Local", 1580000, 1600000, "Segunda Mano", "No alquilado"),
        array(5, "Cedritos", 343, 32000000, "Local", 190000, 1100000, "Primera Mano", "No alquilado")
    );
    //
    private $precioPorMetro2;
    private $precioPorHora;
    private $estadoAlquiler;

    public function cargarDatos($codigoVivienda) {
        $codigoVivienda -= 1;
        $this->set_codigoConstruccion($this->listadoLocales[$codigoVivienda][0]);
        $this->set_ubicacion($this->listadoLocales[$codigoVivienda][1]);
        $this->set_area($this->listadoLocales[$codigoVivienda][2]);
        $this->set_precioPorHora($this->listadoLocales[$codigoVivienda][3]);
        $this->set_precioPorMetro2($this->listadoLocales[$codigoVivienda][4]);
        $this->set_tipoMano($this->listadoLocales[$codigoVivienda][5]);
        $this->setEstadoAlquiler($this->listadoLocales[$codigoVivienda][6]);
        $this->setPrecio($this->listadoLocales[$codigoVivienda][7]);
    }

    public function anadeAlquilerInmueble($in) {
        
    }

    public function get_precioPorMetro2() {
        return $this->precioPorMetro2;
    }

    public function get_precioPorHora() {
        return $this->precioPorHora;
    }

    public function set_precioPorMetro2($precioPorMetro2) {
        $this->precioPorMetro2 = $precioPorMetro2;
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
    public function getLocales() {
        return $this->locales;
    }

    /**
     * @param array $locales
     */
    public function setLocales($locales) {
        $this->locales = $locales;
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

    public function getNombreCampos() {
        return $this->nombreCampos;
    }

    public function setNombreCampos($nombreCampos) {
        $this->nombreCampos = $nombreCampos;
    }

}

?>