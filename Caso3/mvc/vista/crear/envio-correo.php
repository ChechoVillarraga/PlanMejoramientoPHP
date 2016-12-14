<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once '../../servicios/MailGildardou/class.phpmailer.php';
require_once '../../servicios/MailGildardou/class.smtp.php';
$msg = null;
ECHO '<HIDEN>';
      if (isset($_POST["phpmailer"]))
     {
        
    $nombre = htmlspecialchars($_POST["nombre"]);
    $asunto =htmlspecialchars( $_POST["asunto"]);
    $mensaje = $_POST["mensaje"];
    $adjunto = $_FILES["adjunto"];
    $verificador=false;
        
          $mail = new PHPMailer;
		  
		  //indico a la clase que use SMTP
          $mail->IsSMTP();
		  
          //permite modo debug para ver mensajes de las cosas que van ocurriendo
          //$mail->SMTPDebug = 0;

	 //Debo de hacer autenticaciï¿½n SMTP
          $mail->SMTPAuth = true;
          $mail->SMTPSecure = "ssl";

		  //indico el servidor de Gmail para SMTP
          $mail->Host = "smtp.gmail.com";

		  //indico el puerto que usa Gmail
          $mail->Port = 465;

		  //indico un usuario / clave de un usuario de gmail
          $mail->Username = "gildardoaguirrerios@gmail.com";
          $mail->Password = "G87A10R29";




     
//<<<<<<< HEAD
 //   $correo = $_POST["email"] ;
    $titulo     = $asunto;
    $contenido  = $mensaje; //campo mensaje del html
//=======
   // $correo     = $_POST['email'];
    $titulo     = $_POST['asunto'];
    $contenido  = $_POST['mensaje']; //campo mensaje del html
          
//>>>>>>> a1bb3b191106bc8f3ff7dc233a9650d94316d4ae


    $mail->From = "gildardoaguirrerios@gmail.com";

    $mail->FromName = "SISTEMA DE GESTION DE PREGUNTAS";

    //$mail->AddAddress("$correo");
    $mail->Subject    = "$titulo";

    $mail->IsHTML(true);
    $mail->MsgHTML($contenido);
    if ($adjunto ["size"] > 0)
    {

        $mail->addAttachment($adjunto ["tmp_name"], $adjunto ["name"]);
    }
    
    $correos[]="gaguirre5@misena.edu.co";
    $correos[]="gildardoaguirrerios@gmail.com";
    foreach($correos as $p){
    $mail->AddAddress($p);    
    $mail->Send();
    $mail->ClearAddresses();
    
    }
    

         if($mail->Send())
         {
//<<<<<<< HEAD
         	$msg = "Lo siento, ha habido un error al enviar el mensaje a $correo";
//=======
         	$msg = "Lo siento, ha habido un error al enviar el mensaje a $correo ";
//>>>>>>> a1bb3b191106bc8f3ff7dc233a9650d94316d4ae
         }
         else
         {
             $msg= "En hora buena el mensaje ha sido enviado con exito";
         }

 }

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
    <strong class="alert-success"><?php echo $msg; ?></strong>

<div style="background-color: rgba(255,255,266,0.8); padding: 30px; padding-bottom: 10px; border-radius: 10px;margin: 30px; height: 450px; width: 450px;">
<form action="<?php $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data">
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
