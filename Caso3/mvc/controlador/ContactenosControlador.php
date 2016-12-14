<?php 
echo 'Hola soy controlador';
if(isset($_POST['submit'])) {
    echo 'Hola soy submit';
    if (is_null($POST['name'])) {
        echo 'Hola soy name';
        print_r('<H3>Por favor completa el nombre<H3>');
    }
$name = $_POST['name'];
$email = $_POST['email'];
$website = $_POST['website'];
$message = $_POST['message'];
$subject = 'Mensaje de Contactenos';
$to = 'test@yahoo.com';

$headers="From: {$email}\r\nReply-To: {$email}";
mail($to,$subject,$message,$headers);
$success = "Gracias, Pronto nos estaremos contactando con usted.";
}
?>