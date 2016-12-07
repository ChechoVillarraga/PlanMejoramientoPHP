<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2016-12-06 20:53
 */
interface RolesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Roles 
	 */
	public function load($id);

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
 	 * @param role primary key
 	 */
	public function delete($idRoles);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Roles role
 	 */
	public function insert($role);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Roles role
 	 */
	public function update($role);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByRol($value);

	public function queryByDescripcionRol($value);


	public function deleteByRol($value);

	public function deleteByDescripcionRol($value);


}
?>