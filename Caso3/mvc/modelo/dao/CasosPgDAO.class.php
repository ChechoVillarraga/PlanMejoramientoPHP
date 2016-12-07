<?php
/**
 * Class that operate on table 'casos'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2016-12-06 20:53
 */
class CasosPgDAO implements CasosDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return CasosMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM casos WHERE idCasos = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM casos';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM casos ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param caso primary key
 	 */
	public function delete($idCasos){
		$sql = 'DELETE FROM casos WHERE idCasos = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idCasos);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CasosMySql caso
 	 */
	public function insert($caso){
		$sql = 'INSERT INTO casos (FechaCreacion) VALUES (?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($caso->fechaCreacion);

		$id = $this->executeInsert($sqlQuery);	
		$caso->idCasos = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CasosMySql caso
 	 */
	public function update($caso){
		$sql = 'UPDATE casos SET FechaCreacion = ? WHERE idCasos = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($caso->fechaCreacion);

		$sqlQuery->setNumber($caso->idCasos);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM casos';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByFechaCreacion($value){
		$sql = 'SELECT * FROM casos WHERE FechaCreacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByFechaCreacion($value){
		$sql = 'DELETE FROM casos WHERE FechaCreacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return CasosMySql 
	 */
	protected function readRow($row){
		$caso = new Caso();
		
		$caso->idCasos = $row['idCasos'];
		$caso->fechaCreacion = $row['FechaCreacion'];

		return $caso;
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
	 * @return CasosMySql 
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