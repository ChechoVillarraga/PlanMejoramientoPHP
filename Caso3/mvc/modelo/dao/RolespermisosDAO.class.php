<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2016-12-06 20:53
 */
interface RolespermisosDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Rolespermisos 
	 */
	public function load($rolesIdRoles, $permisosIdPermisos);

	/**
	 * Get all records from table
	 */
	public function queryAll();
	
	/**
	 * Get all records from table ordered by field
	 * @Param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn);
	
	/**
 	 * Delete record from table
 	 * @param rolespermiso primary key
 	 */
	public function delete($rolesIdRoles, $permisosIdPermisos);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Rolespermisos rolespermiso
 	 */
	public function insert($rolespermiso);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Rolespermisos rolespermiso
 	 */
	public function update($rolespermiso);	

	/**
	 * Delete all rows
	 */
	public function clean();



}
?>