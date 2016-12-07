<?php
	/**
	 * Object represents table 'estados'
	 *
     	 * @author: http://phpdao.com
     	 * @date: 2016-12-06 20:53	 
	 */
	class Estado{
		
		private $idEstados;

		private $estado;

		private $descripcionEstado;

		function getIdEstados() {
                    return $this->idEstados;
                }

                function getEstado() {
                    return $this->estado;
                }

                function getDescripcionEstado() {
                    return $this->descripcionEstado;
                }

                function setIdEstados($idEstados) {
                    $this->idEstados = $idEstados;
                }

                function setEstado($estado) {
                    $this->estado = $estado;
                }

                function setDescripcionEstado($descripcionEstado) {
                    $this->descripcionEstado = $descripcionEstado;
                }


	}
?>