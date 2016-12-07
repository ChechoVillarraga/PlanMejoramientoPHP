<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2016-12-06 20:53
 */
interface AreaDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Area 
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
 	 * @param area primary key
 	 */
	public function delete($idArea);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Area area
 	 */
	public function insert($area);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Area area
 	 */
	public function update($area);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByArea($value);


	public function deleteByArea($value);


}
?>