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
require_once './Tarea.php';
class TareaProgramada {
    
    private $objTareaP;
    
    private function TareaProgramada() {
        
        $this-> objTarea = TareaProgramada::$objTarea;
        
    }

    
    private $corresponde = false;
    
    public function correspondeEjecutar() {
        
        return self::$corresponde;
        
    }
    
    public function ejecutar(){
        
    }
    
}
