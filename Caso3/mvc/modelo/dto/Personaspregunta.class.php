<?php
	/**
	 * Object represents table 'personaspreguntas'
	 *
     	 * @author: http://phpdao.com
     	 * @date: 2016-12-06 20:53	 
	 */
	class Personaspregunta{
		
		private $personasIdPersonas;

		private $casosIdCasos;

		private $preguntasRespuestasIdPreguntas;

		private $fechaEnvio;

		function getPersonasIdPersonas() {
                    return $this->personasIdPersonas;
                }

                function getCasosIdCasos() {
                    return $this->casosIdCasos;
                }

                function getPreguntasRespuestasIdPreguntas() {
                    return $this->preguntasRespuestasIdPreguntas;
                }

                function getFechaEnvio() {
                    return $this->fechaEnvio;
                }

                function setPersonasIdPersonas($personasIdPersonas) {
                    $this->personasIdPersonas = $personasIdPersonas;
                }

                function setCasosIdCasos($casosIdCasos) {
                    $this->casosIdCasos = $casosIdCasos;
                }

                function setPreguntasRespuestasIdPreguntas($preguntasRespuestasIdPreguntas) {
                    $this->preguntasRespuestasIdPreguntas = $preguntasRespuestasIdPreguntas;
                }

                function setFechaEnvio($fechaEnvio) {
                    $this->fechaEnvio = $fechaEnvio;
                }


	}
?>