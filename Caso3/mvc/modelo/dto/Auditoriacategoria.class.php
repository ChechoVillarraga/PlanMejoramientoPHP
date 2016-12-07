<?php
	/**
	 * Object represents table 'auditoriacategoria'
	 *
     	 * @author: http://phpdao.com
     	 * @date: 2016-12-06 20:53	 
	 */
	class Auditoriacategoria{
		
		private $idAuditoriaCategoria;

		private $nombreCategoria;

		private $fechaRegistro;

		private $nombrePersona;

		private $idPersona;

		function getIdAuditoriaCategoria() {
                    return $this->idAuditoriaCategoria;
                }

                function getNombreCategoria() {
                    return $this->nombreCategoria;
                }

                function getFechaRegistro() {
                    return $this->fechaRegistro;
                }

                function getNombrePersona() {
                    return $this->nombrePersona;
                }

                function getIdPersona() {
                    return $this->idPersona;
                }

                function setIdAuditoriaCategoria($idAuditoriaCategoria) {
                    $this->idAuditoriaCategoria = $idAuditoriaCategoria;
                }

                function setNombreCategoria($nombreCategoria) {
                    $this->nombreCategoria = $nombreCategoria;
                }

                function setFechaRegistro($fechaRegistro) {
                    $this->fechaRegistro = $fechaRegistro;
                }

                function setNombrePersona($nombrePersona) {
                    $this->nombrePersona = $nombrePersona;
                }

                function setIdPersona($idPersona) {
                    $this->idPersona = $idPersona;
                }


	}
?>