<?php
/**
 * Class that operate on table 'personas'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2016-12-06 20:53
 */
class PersonasPgDAO implements PersonasDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return PersonasMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM personas WHERE idPersonas = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM personas';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM personas ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param persona primary key
 	 */
	public function delete($idPersonas){
		$sql = 'DELETE FROM personas WHERE idPersonas = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idPersonas);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param PersonasMySql persona
 	 */
	public function insert($persona){
		$sql = 'INSERT INTO personas (nombres, apellidos, correo, clave, Roles_idRoles, Area_idArea) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($persona->nombres);
		$sqlQuery->set($persona->apellidos);
		$sqlQuery->set($persona->correo);
		$sqlQuery->set($persona->clave);
		$sqlQuery->setNumber($persona->rolesIdRoles);
		$sqlQuery->setNumber($persona->areaIdArea);

		$id = $this->executeInsert($sqlQuery);	
		$persona->idPersonas = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param PersonasMySql persona
 	 */
	public function update($persona){
		$sql = 'UPDATE personas SET nombres = ?, apellidos = ?, correo = ?, clave = ?, Roles_idRoles = ?, Area_idArea = ? WHERE idPersonas = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($persona->nombres);
		$sqlQuery->set($persona->apellidos);
		$sqlQuery->set($persona->correo);
		$sqlQuery->set($persona->clave);
		$sqlQuery->setNumber($persona->rolesIdRoles);
		$sqlQuery->setNumber($persona->areaIdArea);

		$sqlQuery->setNumber($persona->idPersonas);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM personas';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByNombres($value){
		$sql = 'SELECT * FROM personas WHERE nombres = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByApellidos($value){
		$sql = 'SELECT * FROM personas WHERE apellidos = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCorreo($value){
		$sql = 'SELECT * FROM personas WHERE correo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByClave($value){
		$sql = 'SELECT * FROM personas WHERE clave = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRolesIdRoles($value){
		$sql = 'SELECT * FROM personas WHERE Roles_idRoles = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAreaIdArea($value){
		$sql = 'SELECT * FROM personas WHERE Area_idArea = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByNombres($value){
		$sql = 'DELETE FROM personas WHERE nombres = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByApellidos($value){
		$sql = 'DELETE FROM personas WHERE apellidos = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCorreo($value){
		$sql = 'DELETE FROM personas WHERE correo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByClave($value){
		$sql = 'DELETE FROM personas WHERE clave = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRolesIdRoles($value){
		$sql = 'DELETE FROM personas WHERE Roles_idRoles = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAreaIdArea($value){
		$sql = 'DELETE FROM personas WHERE Area_idArea = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return PersonasMySql 
	 */
	protected function readRow($row){
		$persona = new Persona();
		
		$persona->idPersonas = $row['idPersonas'];
		$persona->nombres = $row['nombres'];
		$persona->apellidos = $row['apellidos'];
		$persona->correo = $row['correo'];
		$persona->clave = $row['clave'];
		$persona->rolesIdRoles = $row['Roles_idRoles'];
		$persona->areaIdArea = $row['Area_idArea'];

		return $persona;
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
	 * @return PersonasMySql 
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