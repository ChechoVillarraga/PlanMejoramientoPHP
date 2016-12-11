<?php

/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2016-12-06 20:53
 */
interface PersonaspreguntasDAO {

    public function queryPreguntasPorCaso($caso);

    public function traerOtrosCampos($arrayExit);

    public function queryCasoMinimo();

    public function queryPreguntaMinimo();

    public function queryPreguntas();

    public function insert($hey, $id);

    /**
     * Get Domain object by primry key
     *
     * @param String $id primary key
     * @Return Personaspreguntas 
     */
    public function load($personasIdPersonas, $casosIdCasos, $preguntasRespuestasIdPreguntas);

    /**
     * Get all records from table
     */
    public function queryAll();

    /**
     * Get all records from table ordered by field
     * @Param $orderColumn column name
     */
    public function queryAllOrderBy($orderColumn);

    /**
     * Delete record from table
     * @param personaspregunta primary key
     */
    public function delete($personasIdPersonas, $casosIdCasos, $preguntasRespuestasIdPreguntas);

    /**
     * Update record in table
     *
     * @param Personaspreguntas personaspregunta
     */
    public function update($personaspregunta);

    /**
     * Delete all rows
     */
    public function clean();

    public function queryByFechaEnvio($value);

    public function deleteByFechaEnvio($value);
}

?>