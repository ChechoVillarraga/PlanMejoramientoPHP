<?php
	/**
	 * Object represents table 'roles'
	 *
     	 * @author: http://phpdao.com
     	 * @date: 2016-12-06 20:53	 
	 */
	class Role{
		
		private $idRoles;

		private $rol;

		private $descripcionRol;

		function getIdRoles() {
                    return $this->idRoles;
                }

                function getRol() {
                    return $this->rol;
                }

                function getDescripcionRol() {
                    return $this->descripcionRol;
                }

                function setIdRoles($idRoles) {
                    $this->idRoles = $idRoles;
                }

                function setRol($rol) {
                    $this->rol = $rol;
                }

                function setDescripcionRol($descripcionRol) {
                    $this->descripcionRol = $descripcionRol;
                }


	}
?>