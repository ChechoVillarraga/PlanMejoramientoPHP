<?php

if (!session_id()) {
    session_start();
}

/**
 * Class that operate on table 'personaspreguntas'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2016-12-06 20:53
 */
class PersonaspreguntasPgDAO implements PersonaspreguntasDAO {

    private $conexion = null;

    function __construct() {
        $this->conexion = DbConnection::singletonConexion();
    }

    public function queryPreguntasPorCaso($caso) {
        echo $caso;
        $allPreguntas = array();
        $sql = 'SELECT preguntasrespuestas_idpreguntas,fechaenvio,casos_idcasos,preguntasrespuestas_idpreguntas '
                . 'FROM personaspreguntas '
                . 'WHERE casos_idcasos=' . $caso;
        try {
            $query = $this->conexion->prepare($sql);
            if ($query->execute()) {
                $arrayExit = $query->fetchALL(PDO::FETCH_ASSOC);
                $allPreguntas = $this->traerOtrosCampos($arrayExit);
            } else {
                $this->outputMessage = 'Error in the sql expression';
            }
        } catch (PDOException $e) {
            $this->outputMessage = "error in the connection : " . $e->getMessage();
        }
        return $allPreguntas;
    }

    public function traerOtrosCampos($arrayExit) {
        $objCasos = new CasosPgDAO();
        $objPregunta = new PreguntasrespuestasPgDAO();
        for ($i = 0; $i < count($arrayExit); $i++) {
            $arrayRetorno = $objCasos->queryFechaCreacion($arrayExit[$i]['casos_idcasos']);
            $arrayExit[$i][] = $arrayRetorno[0]['fechacreacion'];
            $arrayRetorno = $objPregunta->queryPreguntaCategoria($arrayExit[$i]['preguntasrespuestas_idpreguntas']);
            $arrayExit[$i]['preguntasrespuestas_idpreguntas'] = $arrayRetorno[0]['categoria'];
            $arrayExit[$i][] = $arrayRetorno[0]['estado'];
            $arrayExit[$i][] = $arrayRetorno[0]['preguntas'];
            $arrayExit[$i][] = $arrayRetorno[0]['idcategoriapregunta'];
        }
        return $arrayExit;
    }

    public function load($personasIdPersonas, $casosIdCasos, $preguntasRespuestasIdPreguntas) {
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
    public function queryAll() {
        $sql = 'SELECT * FROM personaspreguntas';
        $sqlQuery = new SqlQuery($sql);
        return $this->getList($sqlQuery);
    }

    public function queryCasoMinimo() {
        $allPreguntas = array();
        $sql = 'SELECT casos_idcasos FROM personaspregunta WHERE personas_idpersonas=' . $_SESSION['idPersonas'] . ' group by casos_idcasos';
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

    public function queryPreguntaMinimo() {
        $allPreguntas = array();
        $sql = 'SELECT casos_idcasos FROM personaspregunta WHERE personas_idpersonas=' . $_SESSION['idPersonas'] . ' group by casos_idcasos';
        try {
            $query = $this->conexion->prepare($sql);
            if ($query->execute()) {
                $arrayExit = $query->fetchALL(PDO::FETCH_ASSOC);
                $allPreguntas = $this->traerOtrosCampos($arrayExit);
            } else {
                $this->outputMessage = 'Error in the sql expression';
            }
        } catch (PDOException $e) {
            $this->outputMessage = "error in the connection : " . $e->getMessage();
        }
        return $allPreguntas;
    }

    public function queryPreguntas() {
        $allPreguntas = array();
        $sql = 'SELECT * FROM personaspreguntas pp inner join preguntasrespuestas pr on pr.idpreguntas = pp.preguntasrespuestas_idpreguntas inner join categoriapregunta cp on cp.idcategoriapregunta=pr.categoriapregunta_idcategoriapregunta WHERE pp.personas_idpersonas=' . $_SESSION['idPersonas'];
        if ($_SESSION['roles_idroles'] == 1) {
            $sql .= ' and pr.estados_idestados=4';
        } else if ($_SESSION['roles_idroles'] == 2) {
            $sql .= ' and (pr.estados_idestados=3 OR pr.estados_idestados=6)';
        }
        echo $sql;
        try {
            $query = $this->conexion->prepare($sql);
            if ($query->execute()) {
                $arrayExit = $query->fetchALL(PDO::FETCH_ASSOC);
                $allPreguntas = $this->traerOtrosCampos($arrayExit);
            } else {
                $this->outputMessage = 'Error in the sql expression';
            }
        } catch (PDOException $e) {
            $this->outputMessage = "error in the connection : " . $e->getMessage();
        }
        return $allPreguntas;
    }

    /**
     * Get all records from table ordered by field
     *
     * @param $orderColumn column name
     */
    public function queryAllOrderBy($orderColumn) {
        $sql = 'SELECT * FROM personaspreguntas ORDER BY ' . $orderColumn;
        $sqlQuery = new SqlQuery($sql);
        return $this->getList($sqlQuery);
    }

    /**
     * Delete record from table
     * @param personaspregunta primary key
     */
    public function delete($personasIdPersonas, $casosIdCasos, $preguntasRespuestasIdPreguntas) {
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
    public function insert($idCasos, $idPregun, $per) {
        $respuesta = null;
        $idpersonas = null;
        $sql = 'INSERT INTO personaspreguntas (fechaEnvio, Personas_idPersonas, Casos_idCasos, PreguntasRespuestas_idPreguntas) VALUES (?, ?, ?, ?)';
        try {
            $ahora = date("Y-m-d");
            $idC = $idCasos;
            $idPre = $idPregun[0]['max'];
            $query = $this->conexion->prepare($sql);
            $query->bindParam(1, $ahora);
            $query->bindParam(2, $per);
            $query->bindParam(3, $idC);
            $query->bindParam(4, $idPre);

            if ($query->execute()) {
                $respuesta = 1;
            } else {
                $respuesta = 0;
            }
        } catch (PDOException $e) {
            $this->outputMessage = 'error en conexion' . $e->getMessage();
        }
        return $respuesta;
    }

    /**
     * Update record in table
     *
     * @param PersonaspreguntasMySql personaspregunta
     */
    public function update($personaspregunta) {
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
    public function clean() {
        $sql = 'DELETE FROM personaspreguntas';
        $sqlQuery = new SqlQuery($sql);
        return $this->executeUpdate($sqlQuery);
    }

    public function queryByFechaEnvio($value) {
        $sql = 'SELECT * FROM personaspreguntas WHERE fechaEnvio = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function deleteByFechaEnvio($value) {
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
    protected function readRow($row) {
        $personaspregunta = new Personaspregunta();

        $personaspregunta->personasIdPersonas = $row['Personas_idPersonas'];
        $personaspregunta->casosIdCasos = $row['Casos_idCasos'];
        $personaspregunta->preguntasRespuestasIdPreguntas = $row['PreguntasRespuestas_idPreguntas'];
        $personaspregunta->fechaEnvio = $row['fechaEnvio'];

        return $personaspregunta;
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
     * @return PersonaspreguntasMySql 
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