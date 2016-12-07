<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2016-12-06 20:53
 */
interface CategoriapreguntaDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Categoriapregunta 
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
 	 * @param categoriapregunta primary key
 	 */
	public function delete($idCategoriaPregunta);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Categoriapregunta categoriapregunta
 	 */
	public function insert($categoriapregunta);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Categoriapregunta categoriapregunta
 	 */
	public function update($categoriapregunta);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCategoria($value);

	public function queryByDescripcionCategoria($value);

	public function queryByAreaIdArea($value);


	public function deleteByCategoria($value);

	public function deleteByDescripcionCategoria($value);

	public function deleteByAreaIdArea($value);


}
?>