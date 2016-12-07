<?php
/**
 * Class that operate on table 'personaspreguntas'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2016-12-06 20:53
 */
class PersonaspreguntasPgDAO implements PersonaspreguntasDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return PersonaspreguntasMySql 
	 */
	public function load($personasIdPersonas, $casosIdCasos, $preguntasRespuestasIdPreguntas){
		$sql = 'SELECT * FROM personaspreguntas WHERE Personas_idPersonas = ?  AND Casos_idCasos = ?  AND PreguntasRespuestas_idPreguntas = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($personasIdPersonas);
		$sqlQuery->setNumber($casosIdCasos);
		$sqlQuery->setNumber($preguntasRespuestasIdPreguntas);

		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM personaspreguntas';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM personaspreguntas ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param personaspregunta primary key
 	 */
	public function delete($personasIdPersonas, $casosIdCasos, $preguntasRespuestasIdPreguntas){
		$sql = 'DELETE FROM personaspreguntas WHERE Personas_idPersonas = ?  AND Casos_idCasos = ?  AND PreguntasRespuestas_idPreguntas = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($personasIdPersonas);
		$sqlQuery->setNumber($casosIdCasos);
		$sqlQuery->setNumber($preguntasRespuestasIdPreguntas);

		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param PersonaspreguntasMySql personaspregunta
 	 */
	public function insert($personaspregunta){
		$sql = 'INSERT INTO personaspreguntas (fechaEnvio, Personas_idPersonas, Casos_idCasos, PreguntasRespuestas_idPreguntas) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($personaspregunta->fechaEnvio);

		
		$sqlQuery->setNumber($personaspregunta->personasIdPersonas);

		$sqlQuery->setNumber($personaspregunta->casosIdCasos);

		$sqlQuery->setNumber($personaspregunta->preguntasRespuestasIdPreguntas);

		$this->executeInsert($sqlQuery);	
		//$personaspregunta->id = $id;
		//return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param PersonaspreguntasMySql personaspregunta
 	 */
	public function update($personaspregunta){
		$sql = 'UPDATE personaspreguntas SET fechaEnvio = ? WHERE Personas_idPersonas = ?  AND Casos_idCasos = ?  AND PreguntasRespuestas_idPreguntas = ? ';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($personaspregunta->fechaEnvio);

		
		$sqlQuery->setNumber($personaspregunta->personasIdPersonas);

		$sqlQuery->setNumber($personaspregunta->casosIdCasos);

		$sqlQuery->setNumber($personaspregunta->preguntasRespuestasIdPreguntas);

		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM personaspreguntas';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByFechaEnvio($value){
		$sql = 'SELECT * FROM personaspreguntas WHERE fechaEnvio = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByFechaEnvio($value){
		$sql = 'DELETE FROM personaspreguntas WHERE fechaEnvio = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return PersonaspreguntasMySql 
	 */
	protected function readRow($row){
		$personaspregunta = new Personaspregunta();
		
		$personaspregunta->personasIdPersonas = $row['Personas_idPersonas'];
		$personaspregunta->casosIdCasos = $row['Casos_idCasos'];
		$personaspregunta->preguntasRespuestasIdPreguntas = $row['PreguntasRespuestas_idPreguntas'];
		$personaspregunta->fechaEnvio = $row['fechaEnvio'];

		return $personaspregunta;
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
	 * @return PersonaspreguntasMySql 
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