<?php

require_once(realpath(dirname(__FILE__)) . '/../Agencia1/Inmueble.php');

/**
 * @access public
 * @author Sergio
 * @package Agencia1
 */
abstract class Superficie implements Inmueble
{

    private $codigoSuperficie;
    private $precioPorMetro;
    private $area;
    private $ubicacion;
    private $precio;

    public function calcPrice()
    {
        $p = 0;
        $p = $this->precioPorMetro * $this->area;
        return $p;
    }

    public function Superficie()
    {
        // Not yet implemented
    }

    public function equals()
    {
        // Not yet implemented
    }

    public function toString()
    {
        // Not yet implemented
    }

    public function get_codigoSuperficie()
    {
        return $this->codigoSuperficie;
    }

    public function get_precioPorMetro()
    {
        return $this->precioPorMetro;
    }

    public function get_area()
    {
        return $this->area;
    }

    public function get_ubicacion()
    {
        return $this->ubicacion;
    }

    public function set_codigoSuperficie($codigoSuperficie)
    {
        $this->codigoSuperficie = $codigoSuperficie;
    }

    public function set_precioPorMetro($precioPorMetro)
    {
        $this->precioPorMetro = $precioPorMetro;
    }

    public function set_area($area)
    {
        $this->area = $area;
    }

    public function set_ubicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;
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