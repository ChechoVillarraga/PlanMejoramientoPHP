<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2016-12-06 20:53
 */
interface PersonasDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Personas 
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
 	 * @param persona primary key
 	 */
	public function delete($idPersonas);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Personas persona
 	 */
	public function insert($persona);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Personas persona
 	 */
	public function update($persona);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByNombres($value);

	public function queryByApellidos($value);

	public function queryByCorreo($value);

	public function queryByClave($value);

	public function queryByRolesIdRoles($value);

	public function queryByAreaIdArea($value);


	public function deleteByNombres($value);

	public function deleteByApellidos($value);

	public function deleteByCorreo($value);

	public function deleteByClave($value);

	public function deleteByRolesIdRoles($value);

	public function deleteByAreaIdArea($value);


}
?>