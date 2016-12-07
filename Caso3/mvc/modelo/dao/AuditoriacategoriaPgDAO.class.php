<?php
/**
 * Class that operate on table 'auditoriacategoria'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2016-12-06 20:53
 */
class AuditoriacategoriaPgDAO implements AuditoriacategoriaDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AuditoriacategoriaMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM auditoriacategoria WHERE idAuditoriaCategoria = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM auditoriacategoria';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM auditoriacategoria ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param auditoriacategoria primary key
 	 */
	public function delete($idAuditoriaCategoria){
		$sql = 'DELETE FROM auditoriacategoria WHERE idAuditoriaCategoria = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idAuditoriaCategoria);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AuditoriacategoriaMySql auditoriacategoria
 	 */
	public function insert($auditoriacategoria){
		$sql = 'INSERT INTO auditoriacategoria (nombreCategoria, fechaRegistro, nombrePersona, idPersona) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($auditoriacategoria->nombreCategoria);
		$sqlQuery->set($auditoriacategoria->fechaRegistro);
		$sqlQuery->set($auditoriacategoria->nombrePersona);
		$sqlQuery->setNumber($auditoriacategoria->idPersona);

		$id = $this->executeInsert($sqlQuery);	
		$auditoriacategoria->idAuditoriaCategoria = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AuditoriacategoriaMySql auditoriacategoria
 	 */
	public function update($auditoriacategoria){
		$sql = 'UPDATE auditoriacategoria SET nombreCategoria = ?, fechaRegistro = ?, nombrePersona = ?, idPersona = ? WHERE idAuditoriaCategoria = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($auditoriacategoria->nombreCategoria);
		$sqlQuery->set($auditoriacategoria->fechaRegistro);
		$sqlQuery->set($auditoriacategoria->nombrePersona);
		$sqlQuery->setNumber($auditoriacategoria->idPersona);

		$sqlQuery->setNumber($auditoriacategoria->idAuditoriaCategoria);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM auditoriacategoria';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByNombreCategoria($value){
		$sql = 'SELECT * FROM auditoriacategoria WHERE nombreCategoria = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaRegistro($value){
		$sql = 'SELECT * FROM auditoriacategoria WHERE fechaRegistro = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNombrePersona($value){
		$sql = 'SELECT * FROM auditoriacategoria WHERE nombrePersona = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIdPersona($value){
		$sql = 'SELECT * FROM auditoriacategoria WHERE idPersona = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByNombreCategoria($value){
		$sql = 'DELETE FROM auditoriacategoria WHERE nombreCategoria = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaRegistro($value){
		$sql = 'DELETE FROM auditoriacategoria WHERE fechaRegistro = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNombrePersona($value){
		$sql = 'DELETE FROM auditoriacategoria WHERE nombrePersona = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIdPersona($value){
		$sql = 'DELETE FROM auditoriacategoria WHERE idPersona = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AuditoriacategoriaMySql 
	 */
	protected function readRow($row){
		$auditoriacategoria = new Auditoriacategoria();
		
		$auditoriacategoria->idAuditoriaCategoria = $row['idAuditoriaCategoria'];
		$auditoriacategoria->nombreCategoria = $row['nombreCategoria'];
		$auditoriacategoria->fechaRegistro = $row['fechaRegistro'];
		$auditoriacategoria->nombrePersona = $row['nombrePersona'];
		$auditoriacategoria->idPersona = $row['idPersona'];

		return $auditoriacategoria;
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
	 * @return AuditoriacategoriaMySql 
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