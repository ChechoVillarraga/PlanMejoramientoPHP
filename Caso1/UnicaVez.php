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
class UnicaVez extends TareaProgramada{
    
    private $corresponde = false;
    
    public function correspondeEjecutar() {
        
        return self::$corresponde;
        
    }
    
}
