<?php

require_once(realpath(dirname(__FILE__)) . '/../Agencia1/Superficie.php');
require_once(realpath(dirname(__FILE__)) . '/../Agencia1/Venta.php');

/**
 * @access public
 * @author Sergio
 * @package Agencia1
 */
class Solares extends Superficie implements Venta {

    //Orden de datos:
    private $nombreCampos = array("Codigo", "Ubicacion", "Area", "Precio", "TipoInmueble", "Tipo Mano", "Estado Venta", "Urbano/Rural");
    private $listadoViviendas = array(
        array(1, "Usaquen", 200, 15000000, "Solares", "Primera", "Vendido", "Rural"),
        array(2, "Floresta", 122, 17000000, "Solares", "Segunda", "A la venta", "Urbano"),
        array(3, "Alqueria", 555, 12000000, "Solares", "Primera", "Vendido", "Urbano"),
        array(4, "Claret", 986, 16000000, "Solares", "Primera", "A la venta", "Rural"),
        array(5, "Cedritos", 343, 11000000, "Solares", "Segunda", "A la venta", "Urbano")
    );
    //******
    private $precio;
    private $estadoVenta;

    public function cargarDatos($codigoVivienda) {
        $codigoVivienda -= 1;
        $this->set_codigoSuperficie($this->listadoViviendas[$codigoVivienda][0]);
        $this->set_ubicacion($this->listadoViviendas[$codigoVivienda][1]);
        $this->set_area($this->listadoViviendas[$codigoVivienda][2]);
        $this->setPrecio($this->listadoViviendas[$codigoVivienda][3]);
        $this->setEstadoVenta($this->listadoViviendas[$codigoVivienda][4]);
    }

    public function anadeVentaInmueble($in) {
        // Not yet implemented
    }

    public function Solares() {
        // Not yet implemented
    }

    public function venderNuevo($precioPorMetro, $area) {
        // Not yet implemented
    }

    public function inmueblesVenta($p) {
        // Not yet implemented
    }

    /**
     * @return mixed
     */
    public function getEstadoVenta() {
        return $this->estadoVenta;
    }

    /**
     * @param mixed $estadoVenta
     */
    public function setEstadoVenta($estadoVenta) {
        $this->estadoVenta = $estadoVenta;
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

    public function getNombreCampos() {
        return $this->nombreCampos;
    }

    public function getListadoViviendas() {
        return $this->listadoViviendas;
    }

    public function setNombreCampos($nombreCampos) {
        $this->nombreCampos = $nombreCampos;
    }

    public function setListadoViviendas($listadoViviendas) {
        $this->listadoViviendas = $listadoViviendas;
    }

}

?>