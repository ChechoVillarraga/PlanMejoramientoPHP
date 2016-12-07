<?php

/**
 * Class that operate on table 'area'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2016-12-06 20:53
 */
class AreaPgDAO implements AreaDAO {

    private $sql = "";

    function __construct() {
        $this->conexion = DbConnection::singletonConexion();
    }

    /**
     * Get Domain object by primry key
     *
     * @param String $id primary key
     * @return AreaMySql 
     */
    public function load($id) {
        $sql = 'SELECT * FROM area WHERE idArea = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($id);
        return $this->getRow($sqlQuery);
    }

    /**
     * Get all records from table
     */
    public function queryAll() {
        $allAr = array();
        $sql = 'SELECT * FROM area';
        try {
            $query = $this->conexion->prepare($sql);
            if ($query->execute()) {
                $arrayExit = $query->fetchALL(PDO::FETCH_ASSOC);
                $allAr[] = $this->acomodarTodos($arrayExit);
            } else {
                $this->outputMessage = 'Error in the sql expression';
            }
        } catch (PDOException $e) {
            $this->outputMessage = "error in the connection : " . $e->getMessage();
        }
        return $allAr;
    }

    public function acomodarTodos($arrayExit) {
        $allAre = array();
        foreach ($arrayExit as $cate) {
            $objArea = new Area();
            $objArea->setIdArea($cate["idarea"]);
            $objArea->setArea($cate["area"]);
            $allAre[] = $objArea;
        }
        return $allAre;
    }

    /**
     * Get all records from table ordered by field
     *
     * @param $orderColumn column name
     */
    public function queryBy($orderColumn) {
        $sql = "SELECT area FROM area WHERE idarea = '" . $orderColumn . "'";
        try {
            $query = $this->conexion->prepare($sql);
            if ($query->execute()) {
                if ($query->rowCount() == 1) {
                    $arrayExit = $query->fetchALL(PDO::FETCH_ASSOC);
                    $allAr = $this->acomodarTodos($arrayExit);
                } else {
                    $allAr = null;
                }
            } else {
                $this->outputMessage = 'Error in the sql expression';
            }
        } catch (PDOException $e) {
            $this->outputMessage = "error in the connection : " . $e->getMessage();
        }
        return $allAr;
    }

    /**
     * Get all records from table ordered by field
     *
     * @param $orderColumn column name
     */
    public function queryAllOrderBy($orderColumn) {
        $sql = 'SELECT * FROM area ORDER BY ' . $orderColumn;
        try {
            $query = $this->conexion->prepare($sql);
            if ($query->execute()) {
                $arrayExit = $query->fetchALL(PDO::FETCH_ASSOC);
                $allAr[] = $this->acomodarTodos($arrayExit);
            } else {
                $this->outputMessage = 'Error in the sql expression';
            }
        } catch (PDOException $e) {
            $this->outputMessage = "error in the connection : " . $e->getMessage();
        }
        return $allAr;
    }

    /**
     * Delete record from table
     * @param area primary key
     */
    public function delete($idArea) {
        $sql = 'DELETE FROM area WHERE idArea = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($idArea);
        return $this->executeUpdate($sqlQuery);
    }

    /**
     * Insert record to table
     *
     * @param AreaMySql area
     */
    public function insert($area) {
        $sql = 'INSERT INTO area (area) VALUES (?)';
        $sqlQuery = new SqlQuery($sql);

        $sqlQuery->set($area->area);

        $id = $this->executeInsert($sqlQuery);
        $area->idArea = $id;
        return $id;
    }

    /**
     * Update record in table
     *
     * @param AreaMySql area
     */
    public function update($area) {
        $sql = 'UPDATE area SET area = ? WHERE idArea = ?';
        $sqlQuery = new SqlQuery($sql);

        $sqlQuery->set($area->area);

        $sqlQuery->setNumber($area->idArea);
        return $this->executeUpdate($sqlQuery);
    }

    /**
     * Delete all rows
     */
    public function clean() {
        $sql = 'DELETE FROM area';
        $sqlQuery = new SqlQuery($sql);
        return $this->executeUpdate($sqlQuery);
    }

    public function queryByArea($value) {
        $sql = 'SELECT * FROM area WHERE area = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function deleteByArea($value) {
        $sql = 'DELETE FROM area WHERE area = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    /**
     * Read row
     *
     * @return AreaMySql 
     */
    protected function readRow($row) {
        $area = new Area();

        $area->idArea = $row['idArea'];
        $area->area = $row['area'];

        return $area;
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
     * @return AreaMySql 
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