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
require_once './Falla.php';
class CortarPorErrorOWarning implements EstrategiaEjecucion{
    
    private $objFalla;
    
    public function cortarPorErrorOWarning(Falla $objFalla)
    {
        $this->objFalla = $objFalla;
    }
    
    public function ejecutar($lista = array()){
        
    }
}
