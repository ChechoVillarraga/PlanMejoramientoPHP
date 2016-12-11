<?php

require_once '../../modelo/include_dao.php';
$c = array();
$objTags = new TagsPgDAO();

$c = $objTags->queryAll();


foreach ($c as $tags) {
    $id = $tags['idtags'];

    echo '<option value="' . $id . '">' . $tags['tags'] . '</option>';
}
