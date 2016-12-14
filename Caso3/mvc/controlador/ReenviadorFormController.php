<?php

/* @var $_GET type */
echo'<form class="form-horizontal" action="../../controlador/ReenviarPreguntaController.php?caso=' . $_GET['caso'] . '&cat=' . $_GET["cat"] . '" method="POST">';