<?php

/**
 * Class that operate on table 'personas'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2016-12-06 20:53
 */
class PersonasPgDAO implements PersonasDAO {

    private $conexion = null;

    function __construct() {
        $this->conexion = DbConnection::singletonConexion();
    }

    public function queryAllAreaRol() {
        $sql = 'SELECT * FROM personas where roles_idroles=2 and area_idarea=1';
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

    public function queryInforme() {
        $allCatego = array();
        $sql = 'select x.casos_idcasos,p.preguntas,cp.categoria,a.area,c.fechacreacion from personaspreguntas x inner join casos c on c.idcasos=x.casos_idcasos inner join preguntasrespuestas p on p.idpreguntas=x.preguntasrespuestas_idpreguntas inner join categoriapregunta cp on cp.idcategoriapregunta=p.categoriapregunta_idcategoriapregunta inner join area a on a.idarea = cp.area_idarea inner join personas pe on pe.idpersonas=x.personas_idpersonas inner join roles r on r.idroles=pe.roles_idroles where pe.roles_idroles=1 group by x.casos_idcasos,p.preguntas,cp.categoria,a.area,c.fechacreacion';
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

    public function queryAllByCoordinadores() {
        $sql = 'SELECT * FROM personas inner join area on area.idarea=personas.area_idarea where roles_idroles=2';
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
    
    public function queryAllByCoorArea() {
        $sql = 'SELECT * FROM personas inner join area on area.idarea=personas.area_idarea where roles_idroles=2 and area_idarea='.$_SESSION["roles_idroles"];
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

    public function queryAllMisEmpleados() {
        $sql = 'SELECT * FROM personas inner join area on area.idarea=personas.area_idarea where roles_idroles=1 and area_idarea=' . $_SESSION["area_idarea"];
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

    private function traerOtrosCampos($arrayExit) {
        $objCasos = new CasosPgDAO();
        $objPregunta = new PreguntasrespuestasPgDAO();
        for ($i = 0; $i < count($arrayExit); $i++) {
            $arrayRetorno = $objCasos->queryFechaCreacion($arrayExit[$i]['casos_idcasos']);
            $arrayExit[$i][] = $arrayRetorno[0]['fechacreacion'];
            $arrayRetorno = $objPregunta->queryPreguntaCategoria($arrayExit[$i]['preguntasrespuestas_idpreguntas']);
            $arrayExit[$i]['preguntasrespuestas_idpreguntas'] = $arrayRetorno[0]['categoria'];
            $arrayExit[$i][] = $arrayRetorno[0]['estado'];
            $arrayExit[$i][] = $arrayRetorno[0]['preguntas'];
        }
        return $arrayExit;
    }

    /**
     * Get Domain object by primry key
     *
     * @param String $id primary key
     * @return PersonasMySql 
     */
    public function load($id) {
        $sql = 'SELECT * FROM personas WHERE idPersonas = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($id);
        return $this->getRow($sqlQuery);
    }

    /**
     * Get all records from table
     */
    public function queryAll() {
        $sql = 'select idpersonas,nombres,apellidos,correo,rol,area from personas p inner join roles r on p.roles_idroles=r.idroles inner join area a on p.area_idarea=a.idarea';
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
        $sql = 'SELECT * FROM personas ORDER BY ' . $orderColumn;
        $sqlQuery = new SqlQuery($sql);
        return $this->getList($sqlQuery);
    }

    /**
     * Delete record from table
     * @param persona primary key
     */
    public function delete($idPersonas) {
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
    public function insert(Persona $persona) {
        $aprobado;
        $sql = 'INSERT INTO personas (nombres, apellidos, correo, clave, Roles_idRoles, Area_idArea) VALUES (?, ?, ?, ?, ?, ?, ?)';
        try {
            $query = $this->conexion->prepare($sql);
            $query->bindParam(1, $persona->getIdPersonas());
            $query->bindParam(2, $persona->getNombres());
            $query->bindParam(3, $persona->getApellidos());
            $query->bindParam(4, $persona->getCorreo());
            $query->bindParam(5, $persona->getClave());
            $query->bindParam(6, $persona->getRolesIdRoles());
            $query->bindParam(7, $persona->getAreaIdArea());

            if ($query->execute()) {
                $aprobado = true;
            } else {
                $aprobado = false;
            }
        } catch (PDOException $e) {
            $this->outputMessage = 'error en conexion' . $e->getMessage();
        }
        return $aprobado;
    }

    /**
     * Update record in table
     *
     * @param PersonasMySql persona
     */
    public function update($persona) {
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
    public function clean() {
        $sql = 'DELETE FROM personas';
        $sqlQuery = new SqlQuery($sql);
        return $this->executeUpdate($sqlQuery);
    }

    public function queryByNombres($value) {
        $sql = 'SELECT * FROM personas WHERE nombres = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByApellidos($value) {
        $sql = 'SELECT * FROM personas WHERE apellidos = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByCorreo($value) {
        $sql = 'SELECT * FROM personas WHERE correo = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByClave($value) {
        $sql = 'SELECT * FROM personas WHERE clave = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByRolesIdRoles($value) {
        $sql = 'SELECT * FROM personas WHERE Roles_idRoles = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($value);
        return $this->getList($sqlQuery);
    }

    public function queryByAreaIdArea($value) {
        $sql = 'SELECT * FROM personas WHERE Area_idArea = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($value);
        return $this->getList($sqlQuery);
    }

    public function deleteByNombres($value) {
        $sql = 'DELETE FROM personas WHERE nombres = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByApellidos($value) {
        $sql = 'DELETE FROM personas WHERE apellidos = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByCorreo($value) {
        $sql = 'DELETE FROM personas WHERE correo = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByClave($value) {
        $sql = 'DELETE FROM personas WHERE clave = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByRolesIdRoles($value) {
        $sql = 'DELETE FROM personas WHERE Roles_idRoles = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByAreaIdArea($value) {
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
    protected function readRow($row) {
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
     * @return PersonasMySql 
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