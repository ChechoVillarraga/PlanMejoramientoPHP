<?php


include_once '../../modelo/include_dao.php';

$msg = null;

      if (isset($_POST["phpmailer"]))
     {
    $dao=new PersonasPgDAO();
    $personas=$dao->queryAllMisEmpleados();    
    
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
      
    foreach($personas as $p){
    $mail->AddAddress($p['correo']);    
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

