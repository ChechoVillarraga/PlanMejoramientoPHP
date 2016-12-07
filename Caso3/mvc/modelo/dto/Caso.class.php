<?php
	/**
	 * Object represents table 'casos'
	 *
     	 * @author: http://phpdao.com
     	 * @date: 2016-12-06 20:53	 
	 */
	class Caso{
		
		private $idCasos;

		private $fechaCreacion;

		function getIdCasos() {
                    return $this->idCasos;
                }

                function getFechaCreacion() {
                    return $this->fechaCreacion;
                }

                function setIdCasos($idCasos) {
                    $this->idCasos = $idCasos;
                }

                function setFechaCreacion($fechaCreacion) {
                    $this->fechaCreacion = $fechaCreacion;
                }


	}
?>