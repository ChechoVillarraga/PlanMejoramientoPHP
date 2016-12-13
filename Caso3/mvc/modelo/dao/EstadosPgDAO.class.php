<?php

/**
 * Class that operate on table 'estados'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2016-12-06 20:53
 */
class EstadosPgDAO implements EstadosDAO {

    private $conexion = null;

    function __construct() {
        $this->conexion = DbConnection::singletonConexion();
    }

    /**
     * Get Domain object by primry key
     *
     * @param String $id primary key
     * @return EstadosMySql 
     */
    public function load($id) {
        $sql = 'SELECT * FROM estados WHERE idEstados = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($id);
        return $this->getRow($sqlQuery);
    }

    /**
     * Get all records from table
     */
    public function queryAll() {
        $arrayExit = array();
        $sql = 'SELECT idestados, estado, descripcionestado FROM estados;';
        ;
        try {
            $query = $this->conexion->prepare($sql);
            if ($query->execute()) {
                $arrayExit = $query->fetchALL(PDO::FETCH_ASSOC);
            } else {
                $this->outputMessage = 'Error in the sql expression';
            }
        } catch (PDOException $e) {
            $this->outputMessage = "error in the connection : " . $e->getMessage();
        }
        return $arrayExit;
    }

    /**
     * Get all records from table ordered by field
     *
     * @param $orderColumn column name
     */
    public function queryAllOrderBy($orderColumn) {
        $sql = 'SELECT * FROM estados ORDER BY ' . $orderColumn;
        $sqlQuery = new SqlQuery($sql);
        return $this->getList($sqlQuery);
    }

    /**
     * Delete record from table
     * @param estado primary key
     */
    public function delete($idEstados) {
        $sql = 'DELETE FROM estados WHERE idEstados = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($idEstados);
        return $this->executeUpdate($sqlQuery);
    }

    /**
     * Insert record to table
     *
     * @param EstadosMySql estado
     */
    public function insert($estado) {
        $sql = 'INSERT INTO estados (estado, descripcionEstado) VALUES (?, ?)';
        $sqlQuery = new SqlQuery($sql);

        $sqlQuery->set($estado->estado);
        $sqlQuery->set($estado->descripcionEstado);

        $id = $this->executeInsert($sqlQuery);
        $estado->idEstados = $id;
        return $id;
    }

    /**
     * Update record in table
     *
     * @param EstadosMySql estado
     */
    public function update($estado) {
        $sql = 'UPDATE estados SET estado = ?, descripcionEstado = ? WHERE idEstados = ?';
        $sqlQuery = new SqlQuery($sql);

        $sqlQuery->set($estado->estado);
        $sqlQuery->set($estado->descripcionEstado);

        $sqlQuery->setNumber($estado->idEstados);
        return $this->executeUpdate($sqlQuery);
    }

    /**
     * Delete all rows
     */
    public function clean() {
        $sql = 'DELETE FROM estados';
        $sqlQuery = new SqlQuery($sql);
        return $this->executeUpdate($sqlQuery);
    }

    public function queryByEstado($value) {
        $sql = 'SELECT * FROM estados WHERE estado = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByDescripcionEstado($value) {
        $sql = 'SELECT * FROM estados WHERE descripcionEstado = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function deleteByEstado($value) {
        $sql = 'DELETE FROM estados WHERE estado = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByDescripcionEstado($value) {
        $sql = 'DELETE FROM estados WHERE descripcionEstado = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    /**
     * Read row
     *
     * @return EstadosMySql 
     */
    protected function readRow($row) {
        $estado = new Estado();

        $estado->idEstados = $row['idEstados'];
        $estado->estado = $row['estado'];
        $estado->descripcionEstado = $row['descripcionEstado'];

        return $estado;
    }

    protected function getList($sqlQuery) {
        $tab = QueryExecutor::execute($sqlQuery);
        $ret = array();
        for ($i = 0; $i < count($tab); $i++) {
            $ret[$i] = $this->readRow($tab[$i]);
        }
        return $ret;
    }

    /**
     * Get row
     *
     * @return EstadosMySql 
     */
    protected function getRow($sqlQuery) {
        $tab = QueryExecutor::execute($sqlQuery);
        if (count($tab) == 0) {
            return null;
        }
        return $this->readRow($tab[0]);
    }

    /**
     * Execute sql query
     */
    protected function execute($sqlQuery) {
        return QueryExecutor::execute($sqlQuery);
    }

    /**
     * Execute sql query
     */
    protected function executeUpdate($sqlQuery) {
        return QueryExecutor::executeUpdate($sqlQuery);
    }

    /**
     * Query for one row and one column
     */
    protected function querySingleResult($sqlQuery) {
        return QueryExecutor::queryForString($sqlQuery);
    }

    /**
     * Insert row to table
     */
    protected function executeInsert($sqlQuery) {
        return QueryExecutor::executeInsert($sqlQuery);
    }

}

?>