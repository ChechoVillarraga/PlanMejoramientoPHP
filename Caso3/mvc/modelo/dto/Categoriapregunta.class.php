<?php

/**
 * Object represents table 'categoriapregunta'
 *
 * @author: http://phpdao.com
 * @date: 2016-12-06 20:53	 
 */
class Categoriapregunta {

    public $idcategoriapregunta;
    public $categoria;
    public $descripcioncategoria;
    public $areaidarea;
    


        public function set($fields, $value) {
        $this->$fields = $value;
    }

    public function get($fields) {
        return $this->$fields;
    }

}

?>