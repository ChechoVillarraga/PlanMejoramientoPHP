<?php

/**
 * Object represents table 'tags'
 *
 * @author: http://phpdao.com
 * @date: 2016-12-06 20:53	 
 */
class Tag {

    private $idtags;
    private $tags;
    private $descripciontags;

    function getIdTags() {
        return $this->idtags;
    }

    function getTags() {
        return $this->tags;
    }

    function getDescripcionTags() {
        return $this->descripciontags;
    }

    function setIdTags($idTags) {
        $this->idtags = $idTags;
    }

    function setTags($tags) {
        $this->tags = $tags;
    }

    function setDescripcionTags($descripcionTags) {
        $this->descripciontags = $descripcionTags;
    }

}

?>