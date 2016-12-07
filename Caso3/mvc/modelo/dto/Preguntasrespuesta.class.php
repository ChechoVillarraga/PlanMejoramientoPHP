<?php
	/**
	 * Object represents table 'preguntasrespuestas'
	 *
     	 * @author: http://phpdao.com
     	 * @date: 2016-12-06 20:53	 
	 */
	class Preguntasrespuesta{
		
		private $idPreguntas;

		private $preguntas;

		private $categoriaPreguntaIdCategoriaPregunta;

		private $estadosIdEstados;

		function getIdPreguntas() {
                    return $this->idPreguntas;
                }

                function getPreguntas() {
                    return $this->preguntas;
                }

                function getCategoriaPreguntaIdCategoriaPregunta() {
                    return $this->categoriaPreguntaIdCategoriaPregunta;
                }

                function getEstadosIdEstados() {
                    return $this->estadosIdEstados;
                }

                function setIdPreguntas($idPreguntas) {
                    $this->idPreguntas = $idPreguntas;
                }

                function setPreguntas($preguntas) {
                    $this->preguntas = $preguntas;
                }

                function setCategoriaPreguntaIdCategoriaPregunta($categoriaPreguntaIdCategoriaPregunta) {
                    $this->categoriaPreguntaIdCategoriaPregunta = $categoriaPreguntaIdCategoriaPregunta;
                }

                function setEstadosIdEstados($estadosIdEstados) {
                    $this->estadosIdEstados = $estadosIdEstados;
                }


	}
?>