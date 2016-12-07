<?php
	/**
	 * Object represents table 'permisos'
	 *
     	 * @author: http://phpdao.com
     	 * @date: 2016-12-06 20:53	 
	 */
	class Permiso{
		
		private $idPermisos;

		private $permiso;

		private $url;

		private $permisosIdPermisos;

		function getIdPermisos() {
                    return $this->idPermisos;
                }

                function getPermiso() {
                    return $this->permiso;
                }

                function getUrl() {
                    return $this->url;
                }

                function getPermisosIdPermisos() {
                    return $this->permisosIdPermisos;
                }

                function setIdPermisos($idPermisos) {
                    $this->idPermisos = $idPermisos;
                }

                function setPermiso($permiso) {
                    $this->permiso = $permiso;
                }

                function setUrl($url) {
                    $this->url = $url;
                }

                function setPermisosIdPermisos($permisosIdPermisos) {
                    $this->permisosIdPermisos = $permisosIdPermisos;
                }


	}
?>