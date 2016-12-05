<?php
require_once(realpath(dirname(__FILE__)) . '/../Agencia1/Inmueble.php');

/**
 * @access public
 * @author Sergio
 * @package Agencia1
 */
abstract class Construccion implements Inmueble
{
    private $codigoConstruccion;
    private $area;
    private $ubicacion;
    private $tipoMano;
    private $precio;


    public function get_codigoConstruccion()
    {
        return $this->codigoConstruccion;
    }

    public function get_area()
    {
        return $this->area;
    }

    public function get_ubicacion()
    {
        return $this->ubicacion;
    }

    public function get_tipoMano()
    {
        return $this->tipoMano;
    }

    public function set_codigoConstruccion($codigoConstruccion)
    {
        $this->codigoConstruccion = $codigoConstruccion;
    }

    public function set_area($area)
    {
        $this->area = $area;
    }

    public function set_ubicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;
    }

    public function set_tipoMano($tipoMano)
    {
        $this->tipoMano = $tipoMano;
    }

    /**
     * @return mixed
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * @param mixed $precio
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }


}

?>