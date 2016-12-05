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
class Resultado {
    
    private $fecha;
    private $ejecutoError = false;
    private $ejecutoOk = false;
    
    
    public function ejecutoConError() {
        
        return $ejecutoError;
    }
    
    public function ejecutoOk() {
        
        return $ejecutoOk;
    }
    
    public function ejecutoConAdvertencia() {
        
    }
    
    
    
}
