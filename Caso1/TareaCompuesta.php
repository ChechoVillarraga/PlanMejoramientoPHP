<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TareaProgramada
 *
 * @author Sergio
 */

class TareaCompuesta extends Tarea{
    
    private $objTarea = array();
    private $objEstrategiaEjecucion;
    
    public function tareaCompuesta(Tarea $t, EstrategiaEjecucion $e){
        parent::tarea();
        $this->objTarea = $t;
        $this->objEstrategiaEjecucion = $e;
    }

    public function addTareas(Tarea $t){
        $this->objTarea[]=$t;
    }
    
    
    public function doEjecutar() {
        
    }
}
