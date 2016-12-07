<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2016-12-06 20:53
 */
interface PreguntastagsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Preguntastags 
	 */
	public function load($preguntasRespuestasIdPreguntas, $tagsIdTags);

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
 	 * @param preguntastag primary key
 	 */
	public function delete($preguntasRespuestasIdPreguntas, $tagsIdTags);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Preguntastags preguntastag
 	 */
	public function insert($preguntastag);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Preguntastags preguntastag
 	 */
	public function update($preguntastag);	

	/**
	 * Delete all rows
	 */
	public function clean();



}
?>