<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tarea
 *
 * @author Sergio
 */
require_once './Resultado.php';

class Tarea
{

    private $habilitada = false;
    private $deshabilitarSiFalla = false;
    private $objResultado = array();

    public function tarea()
    {
        $this->objResultado = new Resultado();
    }

    public function addResultados(Resultado $r)
    {
        $this->objResultado[] = $r;
    }

    public function ejecutar()
    {

    }

    public function doEjecutar()
    {

    }

    public function ultimaEjecucion()
    {
        $ultima = date();
        return $ultima;
    }

    public function vecesQueSeEjecuto(DateTime $fecha1, DateTime $fecha2)
    {

    }

    public function vecesQueDioError(DateTime $fecha1, DateTime $fecha2)
    {

    }

    /**
     * @return boolean
     */
    public function isHabilitada()
    {
        return $this->habilitada;
    }

    /**
     * @param boolean $habilitada
     */
    public function setHabilitada($habilitada)
    {
        $this->habilitada = $habilitada;
    }

    /**
     * @return boolean
     */
    public function isDeshabilitarSiFalla()
    {
        return $this->deshabilitarSiFalla;
    }

    /**
     * @param boolean $deshabilitarSiFalla
     */
    public function setDeshabilitarSiFalla($deshabilitarSiFalla)
    {
        $this->deshabilitarSiFalla = $deshabilitarSiFalla;
    }


}
