<?php
$title = 'Servicios!';
include_once './templates/navBar.php';
?>
<STYLE>
    .imagen{
        width: 100%;
        
        
    }
    .texto{
        background: #eee;
        opacity: 0.7;
        text-align: justify;
        font-size: 24px;
        font-family: sans-serif;
        color: #000;
    }
</STYLE>


<DIV class="container">
    <DIV class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <H1 class="center-block">Servicios disponibles de El Preguntón</H1>
    </DIV>

    <DIV class="col-lg-8 col-md-8 col-sm-8 col-xs-8 texto">
        Esta aplicacion esta desarrollada en lenguaje PHP para la gestion de preguntas. <br/>
        <br/>
        ¿Tienes alguna pregunta?<br/>
        <br/>
        Generala al Sistema y enviala al Coordinador para que en un tiempo maximo de dos dias te responda.<br/>
        Esto nos ayudara a mejorar nuestro sistema de respuestas, unificando todas las respuestas a una misma pregunta y estandarizando una respuesta unica.<br/>
    </DIV>
    <DIV class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <IMG src='images/pregunta.jpg' alt="Imagen Persona con dudas"  class="center-block imagen"/>
    </DIV>
</DIV>
<?php
include_once './templates/bootom.php';
?>