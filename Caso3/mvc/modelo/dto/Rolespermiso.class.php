<?php
	/**
	 * Object represents table 'rolespermisos'
	 *
     	 * @author: http://phpdao.com
     	 * @date: 2016-12-06 20:53	 
	 */
	class Rolespermiso{
		
		private $rolesIdRoles;

		private $permisosIdPermisos;

		function getRolesIdRoles() {
                    return $this->rolesIdRoles;
                }

                function getPermisosIdPermisos() {
                    return $this->permisosIdPermisos;
                }

                function setRolesIdRoles($rolesIdRoles) {
                    $this->rolesIdRoles = $rolesIdRoles;
                }

                function setPermisosIdPermisos($permisosIdPermisos) {
                    $this->permisosIdPermisos = $permisosIdPermisos;
                }


	}
?>