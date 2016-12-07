<?php
	/**
	 * Object represents table 'tags'
	 *
     	 * @author: http://phpdao.com
     	 * @date: 2016-12-06 20:53	 
	 */
	class Tag{
		
		private $idTags;

		private $tags;

		private $descripcionTags;

		function getIdTags() {
                    return $this->idTags;
                }

                function getTags() {
                    return $this->tags;
                }

                function getDescripcionTags() {
                    return $this->descripcionTags;
                }

                function setIdTags($idTags) {
                    $this->idTags = $idTags;
                }

                function setTags($tags) {
                    $this->tags = $tags;
                }

                function setDescripcionTags($descripcionTags) {
                    $this->descripcionTags = $descripcionTags;
                }


	}
?>