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
class CortarPorError implements EstrategiaEjecucion{
    
    private $objFalla;
    
    public function cortarPorError(Falla $objFalla)
    {
        $this->objFalla = $objFalla;
    }
    
    public function ejecutar(ArrayObject $Lista){
        
    }
}
