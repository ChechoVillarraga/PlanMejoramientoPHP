<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
?>
<html>
<head>
<title>Contacto</title>
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="src/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>
<body>
        <nav>
        <div>'.
         '<h1>Envio de correos</h1>
        </div>
        <ul class="nav nav-tabs" data-bind="tab: $root.currentTab">
              <li class="active"><a href="#add-field-pane" data-toggle="tab" aria-expanded="true">Inicio</a></li>
              <li class=""><a href="view_ppal_1.php" data-toggle="tab" aria-expanded="false">Regresar al inicio</a></li>
              
        </ul>
    </nav> 

<h2 style="color: #FFFFFF">ContÃ¡ctanos</h2>
<div class="container" >
    <strong class="alert-success"><?php echo $_GET['msg']; ?></strong>

<div style="background-color: rgba(255,255,266,0.8); padding: 30px; padding-bottom: 10px; border-radius: 10px;margin: 30px; height: 450px; width: 450px;">
    <form action="../../controlador/GeneracionCircular.php" method="post">
<label>Nombre del destinatario:</label>   
<input name="nombre" type="text" id="nombre" class="form-control required">
<label>Asunto:</label>
<input name="asunto" type="text" id="asunto" class="form-control" required>
<label>Archivo adjunto:</label>
<input type="file" name="adjunto" class="form-control">
<label>Mensaje:</label>
<textarea name="mensaje" cols="50" rows="4" id="mensaje" class="form-control" required></textarea>
<br/>

<button class="btn btn-success">Enviar correo</button>
<input type="hidden" name="phpmailer" class="form-control">
</form>
</div>
</div>
</body>
