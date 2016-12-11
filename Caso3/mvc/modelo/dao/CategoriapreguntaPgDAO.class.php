<?php

/**
 * Class that operate on table 'categoriapregunta'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2016-12-06 20:53
 */
class CategoriapreguntaPgDAO implements CategoriapreguntaDAO {

    private $conexion = null;

    function __construct() {
        $this->conexion = DbConnection::singletonConexion();
    }

    /**
     * Get Domain object by primry key
     *
     * @param String $id primary key
     * @return CategoriapreguntaMySql 
     */
    public function load($id) {
        $sql = 'SELECT * FROM categoriapregunta WHERE idCategoriaPregunta = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($id);
        return $this->getRow($sqlQuery);
    }

    
    /**
     * Get all records from table
     */
    public function queryAll() {
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

    public function acomodarTodos($arrayExit) {
        $allCate = array();
        foreach ($arrayExit as $cate) {
            $objCategoriaEntity = new Categoriapregunta();
            $objCategoriaEntity->set("idcategoriapregunta", $cate["idcategoriapregunta"]);
            $objCategoriaEntity->set("categoria", $cate["categoria"]);
            $objCategoriaEntity->set("descripcioncategoria", $cate["descripcioncategoria"]);
            $objCategoriaEntity->set("areaidarea", $cate["area_idarea"]);
            $allCate[] = $objCategoriaEntity;
        }
        return $allCate;
    }

    public function queryAllAndAreas() {
        $arrayExit = array();
        $sql = 'select c.idcategoriapregunta,c.categoria,c.descripcioncategoria,a.area from categoriapregunta c inner join area a on c.area_idarea=a.idarea where c.area_idarea='.$_SESSION['area_idarea'];
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
        $sql = 'SELECT * FROM categoriapregunta ORDER BY ' . $orderColumn;
        $sqlQuery = new SqlQuery($sql);
        return $this->getList($sqlQuery);
    }

    /**
     * Delete record from table
     * @param categoriapregunta primary key
     */
    public function delete($idCategoriaPregunta) {
        $sql = 'DELETE FROM categoriapregunta WHERE idCategoriaPregunta = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($idCategoriaPregunta);
        return $this->executeUpdate($sqlQuery);
    }

    /**
     * Insert record to table
     *
     * @param CategoriapreguntaMySql categoriapregunta
     */
    public function insert($categoriapregunta) {
        $sql = 'INSERT INTO categoriapregunta (categoria, descripcionCategoria, Area_idArea) VALUES (?, ?, ?)';
        $sqlQuery = new SqlQuery($sql);

        $sqlQuery->set($categoriapregunta->categoria);
        $sqlQuery->set($categoriapregunta->descripcionCategoria);
        $sqlQuery->setNumber($categoriapregunta->areaIdArea);

        $id = $this->executeInsert($sqlQuery);
        $categoriapregunta->idCategoriaPregunta = $id;
        return $id;
    }

    /**
     * Update record in table
     *
     * @param CategoriapreguntaMySql categoriapregunta
     */
    public function update($categoriapregunta) {
        $sql = 'UPDATE categoriapregunta SET categoria = ?, descripcionCategoria = ?, Area_idArea = ? WHERE idCategoriaPregunta = ?';
        $sqlQuery = new SqlQuery($sql);

        $sqlQuery->set($categoriapregunta->categoria);
        $sqlQuery->set($categoriapregunta->descripcionCategoria);
        $sqlQuery->setNumber($categoriapregunta->areaIdArea);

        $sqlQuery->setNumber($categoriapregunta->idCategoriaPregunta);
        return $this->executeUpdate($sqlQuery);
    }

    /**
     * Delete all rows
     */
    public function clean() {
        $sql = 'DELETE FROM categoriapregunta';
        $sqlQuery = new SqlQuery($sql);
        return $this->executeUpdate($sqlQuery);
    }

    public function queryByCategoria($value) {
        $sql = 'SELECT * FROM categoriapregunta WHERE categoria = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByDescripcionCategoria($value) {
        $sql = 'SELECT * FROM categoriapregunta WHERE descripcionCategoria = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByAreaIdArea($value) {
        $sql = 'SELECT * FROM categoriapregunta WHERE Area_idArea = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($value);
        return $this->getList($sqlQuery);
    }

    public function deleteByCategoria($value) {
        $sql = 'DELETE FROM categoriapregunta WHERE categoria = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByDescripcionCategoria($value) {
        $sql = 'DELETE FROM categoriapregunta WHERE descripcionCategoria = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByAreaIdArea($value) {
        $sql = 'DELETE FROM categoriapregunta WHERE Area_idArea = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($value);
        return $this->executeUpdate($sqlQuery);
    }

    /**
     * Read row
     *
     * @return CategoriapreguntaMySql 
     */
    protected function readRow($row) {
        $categoriapregunta = new Categoriapregunta();

        $categoriapregunta->idCategoriaPregunta = $row['idCategoriaPregunta'];
        $categoriapregunta->categoria = $row['categoria'];
        $categoriapregunta->descripcionCategoria = $row['descripcionCategoria'];
        $categoriapregunta->areaIdArea = $row['Area_idArea'];

        return $categoriapregunta;
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
     * @return CategoriapreguntaMySql 
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