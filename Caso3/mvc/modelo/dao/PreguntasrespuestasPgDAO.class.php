<?php
/**
 * Class that operate on table 'preguntasrespuestas'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2016-12-06 20:53
 */
class PreguntasrespuestasPgDAO implements PreguntasrespuestasDAO{

    private $conexion = null;

    function __construct() {
        $this->conexion = DbConnection::singletonConexion();
    }
	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return PreguntasrespuestasMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM preguntasrespuestas WHERE idPreguntas = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM preguntasrespuestas';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
        
            public function queryPreguntas() {
        $allCatego = array();
        $sql = 'SELECT * FROM categoriapregunta';
        try {
            $query = $this->conexion->prepare($sql);
            if ($query->execute()) {
                $arrayExit = $query->fetchALL(PDO::FETCH_ASSOC);
                    $allCatego[] = $this->acomodarTodos($arrayExit);
            } else {
                $this->outputMessage = 'Error in the sql expression';
            }
        } catch (PDOException $e) {
            $this->outputMessage = "error in the connection : " . $e->getMessage();
        }
            return $allCatego;
    }
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM preguntasrespuestas ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param preguntasrespuesta primary key
 	 */
	public function delete($idPreguntas){
		$sql = 'DELETE FROM preguntasrespuestas WHERE idPreguntas = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idPreguntas);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param PreguntasrespuestasMySql preguntasrespuesta
 	 */
	public function insert($preguntasrespuesta){
		$sql = 'INSERT INTO preguntasrespuestas (preguntas, CategoriaPregunta_idCategoriaPregunta, Estados_idEstados) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($preguntasrespuesta->preguntas);
		$sqlQuery->setNumber($preguntasrespuesta->categoriaPreguntaIdCategoriaPregunta);
		$sqlQuery->setNumber($preguntasrespuesta->estadosIdEstados);

		$id = $this->executeInsert($sqlQuery);	
		$preguntasrespuesta->idPreguntas = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param PreguntasrespuestasMySql preguntasrespuesta
 	 */
	public function update($preguntasrespuesta){
		$sql = 'UPDATE preguntasrespuestas SET preguntas = ?, CategoriaPregunta_idCategoriaPregunta = ?, Estados_idEstados = ? WHERE idPreguntas = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($preguntasrespuesta->preguntas);
		$sqlQuery->setNumber($preguntasrespuesta->categoriaPreguntaIdCategoriaPregunta);
		$sqlQuery->setNumber($preguntasrespuesta->estadosIdEstados);

		$sqlQuery->setNumber($preguntasrespuesta->idPreguntas);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM preguntasrespuestas';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByPreguntas($value){
		$sql = 'SELECT * FROM preguntasrespuestas WHERE preguntas = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCategoriaPreguntaIdCategoriaPregunta($value){
		$sql = 'SELECT * FROM preguntasrespuestas WHERE CategoriaPregunta_idCategoriaPregunta = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEstadosIdEstados($value){
		$sql = 'SELECT * FROM preguntasrespuestas WHERE Estados_idEstados = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByPreguntas($value){
		$sql = 'DELETE FROM preguntasrespuestas WHERE preguntas = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCategoriaPreguntaIdCategoriaPregunta($value){
		$sql = 'DELETE FROM preguntasrespuestas WHERE CategoriaPregunta_idCategoriaPregunta = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEstadosIdEstados($value){
		$sql = 'DELETE FROM preguntasrespuestas WHERE Estados_idEstados = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return PreguntasrespuestasMySql 
	 */
	protected function readRow($row){
		$preguntasrespuesta = new Preguntasrespuesta();
		
		$preguntasrespuesta->idPreguntas = $row['idPreguntas'];
		$preguntasrespuesta->preguntas = $row['preguntas'];
		$preguntasrespuesta->categoriaPreguntaIdCategoriaPregunta = $row['CategoriaPregunta_idCategoriaPregunta'];
		$preguntasrespuesta->estadosIdEstados = $row['Estados_idEstados'];

		return $preguntasrespuesta;
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
	 * @return PreguntasrespuestasMySql 
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