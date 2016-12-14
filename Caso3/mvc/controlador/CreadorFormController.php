<?php

/* @var $_GET type */
echo'<form class="form-horizontal" action="../../controlador/ResponderPreguntaController.php?caso='.$_GET["caso"].'&cat='.$_GET["cat"].'" method="POST">';