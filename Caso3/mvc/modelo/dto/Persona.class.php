<?php
	/**
	 * Object represents table 'personas'
	 *
     	 * @author: http://phpdao.com
     	 * @date: 2016-12-06 20:53	 
	 */
	class Persona{
		
		private $idPersonas;

		private $nombres;

		private $apellidos;

		private $correo;

		private $clave;

		private $rolesIdRoles;

		private $areaIdArea;

		function getIdPersonas() {
                    return $this->idPersonas;
                }

                function getNombres() {
                    return $this->nombres;
                }

                function getApellidos() {
                    return $this->apellidos;
                }

                function getCorreo() {
                    return $this->correo;
                }

                function getClave() {
                    return $this->clave;
                }

                function getRolesIdRoles() {
                    return $this->rolesIdRoles;
                }

                function getAreaIdArea() {
                    return $this->areaIdArea;
                }

                function setIdPersonas($idPersonas) {
                    $this->idPersonas = $idPersonas;
                }

                function setNombres($nombres) {
                    $this->nombres = $nombres;
                }

                function setApellidos($apellidos) {
                    $this->apellidos = $apellidos;
                }

                function setCorreo($correo) {
                    $this->correo = $correo;
                }

                function setClave($clave) {
                    $this->clave = $clave;
                }

                function setRolesIdRoles($rolesIdRoles) {
                    $this->rolesIdRoles = $rolesIdRoles;
                }

                function setAreaIdArea($areaIdArea) {
                    $this->areaIdArea = $areaIdArea;
                }


	}
?>