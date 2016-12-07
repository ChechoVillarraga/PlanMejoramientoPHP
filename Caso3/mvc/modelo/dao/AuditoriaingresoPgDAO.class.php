<?php
/**
 * Class that operate on table 'auditoriaingreso'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2016-12-06 20:53
 */
class AuditoriaingresoPgDAO implements AuditoriaingresoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AuditoriaingresoMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM auditoriaingreso WHERE idAuditoriaIngreso = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM auditoriaingreso';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM auditoriaingreso ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param auditoriaingreso primary key
 	 */
	public function delete($idAuditoriaIngreso){
		$sql = 'DELETE FROM auditoriaingreso WHERE idAuditoriaIngreso = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idAuditoriaIngreso);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AuditoriaingresoMySql auditoriaingreso
 	 */
	public function insert($auditoriaingreso){
		$sql = 'INSERT INTO auditoriaingreso (idPersona, fechaIngreso) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($auditoriaingreso->idPersona);
		$sqlQuery->set($auditoriaingreso->fechaIngreso);

		$id = $this->executeInsert($sqlQuery);	
		$auditoriaingreso->idAuditoriaIngreso = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AuditoriaingresoMySql auditoriaingreso
 	 */
	public function update($auditoriaingreso){
		$sql = 'UPDATE auditoriaingreso SET idPersona = ?, fechaIngreso = ? WHERE idAuditoriaIngreso = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($auditoriaingreso->idPersona);
		$sqlQuery->set($auditoriaingreso->fechaIngreso);

		$sqlQuery->setNumber($auditoriaingreso->idAuditoriaIngreso);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM auditoriaingreso';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIdPersona($value){
		$sql = 'SELECT * FROM auditoriaingreso WHERE idPersona = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaIngreso($value){
		$sql = 'SELECT * FROM auditoriaingreso WHERE fechaIngreso = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByIdPersona($value){
		$sql = 'DELETE FROM auditoriaingreso WHERE idPersona = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaIngreso($value){
		$sql = 'DELETE FROM auditoriaingreso WHERE fechaIngreso = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AuditoriaingresoMySql 
	 */
	protected function readRow($row){
		$auditoriaingreso = new Auditoriaingreso();
		
		$auditoriaingreso->idAuditoriaIngreso = $row['idAuditoriaIngreso'];
		$auditoriaingreso->idPersona = $row['idPersona'];
		$auditoriaingreso->fechaIngreso = $row['fechaIngreso'];

		return $auditoriaingreso;
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
	 * @return AuditoriaingresoMySql 
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