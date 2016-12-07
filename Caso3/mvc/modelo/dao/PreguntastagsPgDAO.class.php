<?php
/**
 * Class that operate on table 'preguntastags'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2016-12-06 20:53
 */
class PreguntastagsPgDAO implements PreguntastagsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return PreguntastagsMySql 
	 */
	public function load($preguntasRespuestasIdPreguntas, $tagsIdTags){
		$sql = 'SELECT * FROM preguntastags WHERE PreguntasRespuestas_idPreguntas = ?  AND Tags_idTags = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($preguntasRespuestasIdPreguntas);
		$sqlQuery->setNumber($tagsIdTags);

		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM preguntastags';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM preguntastags ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param preguntastag primary key
 	 */
	public function delete($preguntasRespuestasIdPreguntas, $tagsIdTags){
		$sql = 'DELETE FROM preguntastags WHERE PreguntasRespuestas_idPreguntas = ?  AND Tags_idTags = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($preguntasRespuestasIdPreguntas);
		$sqlQuery->setNumber($tagsIdTags);

		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param PreguntastagsMySql preguntastag
 	 */
	public function insert($preguntastag){
		$sql = 'INSERT INTO preguntastags ( PreguntasRespuestas_idPreguntas, Tags_idTags) VALUES ( ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		

		
		$sqlQuery->setNumber($preguntastag->preguntasRespuestasIdPreguntas);

		$sqlQuery->setNumber($preguntastag->tagsIdTags);

		$this->executeInsert($sqlQuery);	
		//$preguntastag->id = $id;
		//return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param PreguntastagsMySql preguntastag
 	 */
	public function update($preguntastag){
		$sql = 'UPDATE preguntastags SET  WHERE PreguntasRespuestas_idPreguntas = ?  AND Tags_idTags = ? ';
		$sqlQuery = new SqlQuery($sql);
		

		
		$sqlQuery->setNumber($preguntastag->preguntasRespuestasIdPreguntas);

		$sqlQuery->setNumber($preguntastag->tagsIdTags);

		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM preguntastags';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}



	
	/**
	 * Read row
	 *
	 * @return PreguntastagsMySql 
	 */
	protected function readRow($row){
		$preguntastag = new Preguntastag();
		
		$preguntastag->preguntasRespuestasIdPreguntas = $row['PreguntasRespuestas_idPreguntas'];
		$preguntastag->tagsIdTags = $row['Tags_idTags'];

		return $preguntastag;
	}
	
	protected function getList($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRow($tab[$i]);
		}
		return $ret;
	}
	
	/**
	 * Get row
	 *
	 * @return PreguntastagsMySql 
	 */
	protected function getRow($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRow($tab[0]);		
	}
	
	/**
	 * Execute sql query
	 */
	protected function execute($sqlQuery){
		return QueryExecutor::execute($sqlQuery);
	}
	
		
	/**
	 * Execute sql query
	 */
	protected function executeUpdate($sqlQuery){
		return QueryExecutor::executeUpdate($sqlQuery);
	}

	/**
	 * Query for one row and one column
	 */
	protected function querySingleResult($sqlQuery){
		return QueryExecutor::queryForString($sqlQuery);
	}

	/**
	 * Insert row to table
	 */
	protected function executeInsert($sqlQuery){
		return QueryExecutor::executeInsert($sqlQuery);
	}
}
?>