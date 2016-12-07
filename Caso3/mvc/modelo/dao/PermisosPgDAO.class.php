<?php
/**
 * Class that operate on table 'permisos'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2016-12-06 20:53
 */
class PermisosPgDAO implements PermisosDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return PermisosMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM permisos WHERE idPermisos = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM permisos';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM permisos ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param permiso primary key
 	 */
	public function delete($idPermisos){
		$sql = 'DELETE FROM permisos WHERE idPermisos = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idPermisos);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param PermisosMySql permiso
 	 */
	public function insert($permiso){
		$sql = 'INSERT INTO permisos (permiso, url, Permisos_idPermisos) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($permiso->permiso);
		$sqlQuery->set($permiso->url);
		$sqlQuery->setNumber($permiso->permisosIdPermisos);

		$id = $this->executeInsert($sqlQuery);	
		$permiso->idPermisos = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param PermisosMySql permiso
 	 */
	public function update($permiso){
		$sql = 'UPDATE permisos SET permiso = ?, url = ?, Permisos_idPermisos = ? WHERE idPermisos = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($permiso->permiso);
		$sqlQuery->set($permiso->url);
		$sqlQuery->setNumber($permiso->permisosIdPermisos);

		$sqlQuery->setNumber($permiso->idPermisos);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM permisos';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByPermiso($value){
		$sql = 'SELECT * FROM permisos WHERE permiso = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUrl($value){
		$sql = 'SELECT * FROM permisos WHERE url = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPermisosIdPermisos($value){
		$sql = 'SELECT * FROM permisos WHERE Permisos_idPermisos = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByPermiso($value){
		$sql = 'DELETE FROM permisos WHERE permiso = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUrl($value){
		$sql = 'DELETE FROM permisos WHERE url = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPermisosIdPermisos($value){
		$sql = 'DELETE FROM permisos WHERE Permisos_idPermisos = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return PermisosMySql 
	 */
	protected function readRow($row){
		$permiso = new Permiso();
		
		$permiso->idPermisos = $row['idPermisos'];
		$permiso->permiso = $row['permiso'];
		$permiso->url = $row['url'];
		$permiso->permisosIdPermisos = $row['Permisos_idPermisos'];

		return $permiso;
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
	 * @return PermisosMySql 
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