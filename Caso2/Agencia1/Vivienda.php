<?php

require_once(realpath(dirname(__FILE__)) . '/../Agencia1/Construccion.php');
require_once(realpath(dirname(__FILE__)) . '/../Agencia1/Venta.php');

/**
 * @access public
 * @author Sergio
 * @package Agencia1
 */
class Vivienda extends Construccion implements Venta {

    //Orden de datos:
    //codigo, ubicacion, area, numeroHabitaciones, ,numeroPisos, precio, tipoMano, estadoVenta
    private $nombreCampos = array("Codigo", "Ubicacion", "Area", "Precio", "TipoInmueble", "Numero Habitaciones", "Numero de Pisos", "Tipo Mano", "estado vivienda");
    private $listadoViviendas = array(
        array(1, "Usaquen", 200, 15000000, "Vivienda", 2, 2, "Segunda Mano", "Vendido"),
        array(2, "Floresta", 122, 17000000, "Vivienda", 3, 3, "Primera Mano", "A la venta"),
        array(3, "Alqueria", 555, 12000000, "Vivienda", 4, 2, "Primera Mano", "Vendido"),
        array(4, "Claret", 986, 16000000, "Vivienda", 4, 3, "Segunda Mano", "A la venta"),
        array(5, "Cedritos", 343, 11000000, "Vivienda", 2, 2, "Primera Mano", "A la venta")
    );
    //******
    private $precio;
    private $numeroPisos;
    private $numeroHabitaciones;
    private $estadoVenta;

    public function cargarDatos($codigoVivienda) {
        $codigoVivienda -= 1;
        $this->set_codigoConstruccion($this->listadoViviendas[$codigoVivienda][0]);
        $this->set_ubicacion($this->listadoViviendas[$codigoVivienda][1]);
        $this->set_area($this->listadoViviendas[$codigoVivienda][2]);
        $this->set_numeroHabitaciones($this->listadoViviendas[$codigoVivienda][3]);
        $this->set_numeroPisos($this->listadoViviendas[$codigoVivienda][4]);
        $this->set_precio($this->listadoViviendas[$codigoVivienda][5]);
        $this->set_tipoMano($this->listadoViviendas[$codigoVivienda][6]);
        $this->setEstadoVenta($this->listadoViviendas[$codigoVivienda][7]);
    }

    public function anadeVentaInmueble($in) {
        // Not yet implemented
    }

    public function Vivienda() {
        // Not yet implemented
    }

    public function venderNuevo($area, $ubicacion) {
        // Not yet implemented
    }

    public function inmueblesVenta($p) {
        // Not yet implemented
    }

    //GETTERS AND SETTERS

    public function get_precio() {
        return $this->precio;
    }

    public function get_numeroPisos() {
        return $this->numeroPisos;
    }

    public function get_numeroHabitaciones() {
        return $this->numeroHabitaciones;
    }

    public function set_precio($precio) {
        $this->precio = $precio;
    }

    public function set_numeroPisos($numeroPisos) {
        $this->numeroPisos = $numeroPisos;
    }

    public function set_numeroHabitaciones($numeroHabitaciones) {
        $this->numeroHabitaciones = $numeroHabitaciones;
    }

    /**
     * @return array
     */
    public function getListadoViviendas() {
        return $this->listadoViviendas;
    }

    /**
     * @param array $listadoViviendas
     */
    public function setListadoViviendas($listadoViviendas) {
        $this->listadoViviendas = $listadoViviendas;
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

}

?>