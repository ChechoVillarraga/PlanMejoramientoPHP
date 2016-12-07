<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2016-12-06 20:53
 */
interface AuditoriaingresoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Auditoriaingreso 
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
 	 * @param auditoriaingreso primary key
 	 */
	public function delete($idAuditoriaIngreso);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Auditoriaingreso auditoriaingreso
 	 */
	public function insert($auditoriaingreso);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Auditoriaingreso auditoriaingreso
 	 */
	public function update($auditoriaingreso);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIdPersona($value);

	public function queryByFechaIngreso($value);


	public function deleteByIdPersona($value);

	public function deleteByFechaIngreso($value);


}
?>