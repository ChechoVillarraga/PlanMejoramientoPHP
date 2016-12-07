<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2016-12-06 20:53
 */
interface CasosDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Casos 
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
 	 * @param caso primary key
 	 */
	public function delete($idCasos);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Casos caso
 	 */
	public function insert($caso);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Casos caso
 	 */
	public function update($caso);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByFechaCreacion($value);


	public function deleteByFechaCreacion($value);


}
?>