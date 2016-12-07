<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2016-12-06 20:53
 */
interface AuditoriacategoriaDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Auditoriacategoria 
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
 	 * @param auditoriacategoria primary key
 	 */
	public function delete($idAuditoriaCategoria);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Auditoriacategoria auditoriacategoria
 	 */
	public function insert($auditoriacategoria);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Auditoriacategoria auditoriacategoria
 	 */
	public function update($auditoriacategoria);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByNombreCategoria($value);

	public function queryByFechaRegistro($value);

	public function queryByNombrePersona($value);

	public function queryByIdPersona($value);


	public function deleteByNombreCategoria($value);

	public function deleteByFechaRegistro($value);

	public function deleteByNombrePersona($value);

	public function deleteByIdPersona($value);


}
?>