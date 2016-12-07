<?php
	/**
	 * Object represents table 'preguntastags'
	 *
     	 * @author: http://phpdao.com
     	 * @date: 2016-12-06 20:53	 
	 */
	class Preguntastag{
		
		private $preguntasRespuestasIdPreguntas;

		private $tagsIdTags;

		function getPreguntasRespuestasIdPreguntas() {
                    return $this->preguntasRespuestasIdPreguntas;
                }

                function getTagsIdTags() {
                    return $this->tagsIdTags;
                }

                function setPreguntasRespuestasIdPreguntas($preguntasRespuestasIdPreguntas) {
                    $this->preguntasRespuestasIdPreguntas = $preguntasRespuestasIdPreguntas;
                }

                function setTagsIdTags($tagsIdTags) {
                    $this->tagsIdTags = $tagsIdTags;
                }


	}
?>