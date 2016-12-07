<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2016-12-06 20:53
 */
interface TagsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Tags 
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
 	 * @param tag primary key
 	 */
	public function delete($idTags);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Tags tag
 	 */
	public function insert($tag);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Tags tag
 	 */
	public function update($tag);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByTags($value);

	public function queryByDescripcionTags($value);


	public function deleteByTags($value);

	public function deleteByDescripcionTags($value);


}
?>