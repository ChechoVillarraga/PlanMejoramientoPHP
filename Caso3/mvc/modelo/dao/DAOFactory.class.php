<?php

/**
 * DAOFactory
 * @author: http://phpdao.com
 * @date: ${date}
 */
class DAOFactory{
	
	/**
	 * @return AreaDAO
	 */
	public static function getAreaDAO(){
		return new AreaMySqlExtDAO();
	}

	/**
	 * @return AuditoriacategoriaDAO
	 */
	public static function getAuditoriacategoriaDAO(){
		return new AuditoriacategoriaMySqlExtDAO();
	}

	/**
	 * @return AuditoriaingresoDAO
	 */
	public static function getAuditoriaingresoDAO(){
		return new AuditoriaingresoMySqlExtDAO();
	}

	/**
	 * @return CasosDAO
	 */
	public static function getCasosDAO(){
		return new CasosMySqlExtDAO();
	}

	/**
	 * @return CategoriapreguntaDAO
	 */
	public static function getCategoriapreguntaDAO(){
		return new CategoriapreguntaMySqlExtDAO();
	}

	/**
	 * @return EstadosDAO
	 */
	public static function getEstadosDAO(){
		return new EstadosMySqlExtDAO();
	}

	/**
	 * @return PermisosDAO
	 */
	public static function getPermisosDAO(){
		return new PermisosMySqlExtDAO();
	}

	/**
	 * @return PersonasDAO
	 */
	public static function getPersonasDAO(){
		return new PersonasMySqlExtDAO();
	}

	/**
	 * @return PersonaspreguntasDAO
	 */
	public static function getPersonaspreguntasDAO(){
		return new PersonaspreguntasMySqlExtDAO();
	}

	/**
	 * @return PreguntasrespuestasDAO
	 */
	public static function getPreguntasrespuestasDAO(){
		return new PreguntasrespuestasMySqlExtDAO();
	}

	/**
	 * @return PreguntastagsDAO
	 */
	public static function getPreguntastagsDAO(){
		return new PreguntastagsMySqlExtDAO();
	}

	/**
	 * @return RolesDAO
	 */
	public static function getRolesDAO(){
		return new RolesMySqlExtDAO();
	}

	/**
	 * @return RolespermisosDAO
	 */
	public static function getRolespermisosDAO(){
		return new RolespermisosMySqlExtDAO();
	}

	/**
	 * @return TagsDAO
	 */
	public static function getTagsDAO(){
		return new TagsMySqlExtDAO();
	}


}
?>