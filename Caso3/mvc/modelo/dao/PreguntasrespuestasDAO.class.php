<?php

/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2016-12-06 20:53
 */
interface PreguntasrespuestasDAO {

    public function enviarPregunta($pregunta, $idEstado, $categoria);

    public function idPreguntas();

    public function queryPreguntaCategoria($id);

    /**
     * Get Domain object by primry key
     *
     * @param String $id primary key
     * @Return Preguntasrespuestas 
     */
    public function load($id);

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
     * @param preguntasrespuesta primary key
     */
    public function delete($idPreguntas);

    /**
     * Insert record to table
     *
     * @param Preguntasrespuestas preguntasrespuesta
     */
    public function insert($pregunta, $idEstado, $id, $per);

    /**
     * Update record in table
     *
     * @param Preguntasrespuestas preguntasrespuesta
     */
    public function update($preguntasrespuesta);

    /**
     * Delete all rows
     */
    public function clean();

    public function queryByPreguntas($value);

    public function queryByCategoriaPreguntaIdCategoriaPregunta($value);

    public function queryByEstadosIdEstados($value);

    public function deleteByPreguntas($value);

    public function deleteByCategoriaPreguntaIdCategoriaPregunta($value);

    public function deleteByEstadosIdEstados($value);
}

?>