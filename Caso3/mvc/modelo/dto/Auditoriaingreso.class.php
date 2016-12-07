<?php
	/**
	 * Object represents table 'auditoriaingreso'
	 *
     	 * @author: http://phpdao.com
     	 * @date: 2016-12-06 20:53	 
	 */
	class Auditoriaingreso{
		
		private $idAuditoriaIngreso;

		private $idPersona;

		private $fechaIngreso;

		function getIdAuditoriaIngreso() {
                    return $this->idAuditoriaIngreso;
                }

                function getIdPersona() {
                    return $this->idPersona;
                }

                function getFechaIngreso() {
                    return $this->fechaIngreso;
                }

                function setIdAuditoriaIngreso($idAuditoriaIngreso) {
                    $this->idAuditoriaIngreso = $idAuditoriaIngreso;
                }

                function setIdPersona($idPersona) {
                    $this->idPersona = $idPersona;
                }

                function setFechaIngreso($fechaIngreso) {
                    $this->fechaIngreso = $fechaIngreso;
                }


	}
?>