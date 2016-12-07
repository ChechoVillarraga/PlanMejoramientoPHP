<?php
/**
 * Class that operate on table 'rolespermisos'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2016-12-06 20:53
 */
class RolespermisosPgDAO implements RolespermisosDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return RolespermisosMySql 
	 */
	public function load($rolesIdRoles, $permisosIdPermisos){
		$sql = 'SELECT * FROM rolespermisos WHERE Roles_idRoles = ?  AND Permisos_idPermisos = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($rolesIdRoles);
		$sqlQuery->setNumber($permisosIdPermisos);

		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM rolespermisos';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM rolespermisos ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param rolespermiso primary key
 	 */
	public function delete($rolesIdRoles, $permisosIdPermisos){
		$sql = 'DELETE FROM rolespermisos WHERE Roles_idRoles = ?  AND Permisos_idPermisos = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($rolesIdRoles);
		$sqlQuery->setNumber($permisosIdPermisos);

		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param RolespermisosMySql rolespermiso
 	 */
	public function insert($rolespermiso){
		$sql = 'INSERT INTO rolespermisos ( Roles_idRoles, Permisos_idPermisos) VALUES ( ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		

		
		$sqlQuery->setNumber($rolespermiso->rolesIdRoles);

		$sqlQuery->setNumber($rolespermiso->permisosIdPermisos);

		$this->executeInsert($sqlQuery);	
		//$rolespermiso->id = $id;
		//return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param RolespermisosMySql rolespermiso
 	 */
	public function update($rolespermiso){
		$sql = 'UPDATE rolespermisos SET  WHERE Roles_idRoles = ?  AND Permisos_idPermisos = ? ';
		$sqlQuery = new SqlQuery($sql);
		

		
		$sqlQuery->setNumber($rolespermiso->rolesIdRoles);

		$sqlQuery->setNumber($rolespermiso->permisosIdPermisos);

		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM rolespermisos';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}



	
	/**
	 * Read row
	 *
	 * @return RolespermisosMySql 
	 */
	protected function readRow($row){
		$rolespermiso = new Rolespermiso();
		
		$rolespermiso->rolesIdRoles = $row['Roles_idRoles'];
		$rolespermiso->permisosIdPermisos = $row['Permisos_idPermisos'];

		return $rolespermiso;
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
	 * @return RolespermisosMySql 
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