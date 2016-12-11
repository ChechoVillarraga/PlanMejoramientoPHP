<?php

$msg = null;

if (isset($_POST["phpmailler"])) {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $website = htmlspecialchars($_POST["website"]);
    $message = htmlspecialchars($_POST["message"]);

    require '../servicios/PHPMailer/class.phpmailer.php';

    $mail = new PHPMailer();

    $mail->IsSMTP();
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->Host = "smtp-relay.gmail.com";
    $mail->SMTPSecure = "tls";
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->Username = 'seanvibo@gmail.com';
    $mail->Password = 'Ag0sto04';

    $mail->From = "raranda3@misena.edu.co ";
    $mail->FromName = "CorreoProfeRodrigo";
    $mail->AddAddress($email, $name);

    $mail->WordWrap = 50;
    $mail->IsHTML(true);

    $mail->Subject = "Pagina Contactenos";
    $mail->Body = $message;
    $mail->AltBody = $message;

    if ($mail->Send()) {
        echo "<script>alert('Mensaje enviado Correctamente')</script>";
        echo '<meta http-equiv="Refresh" content="0;URL=../vista/contactenos.php">';
        
    } else {
        echo "<script>alert('Mensaje no enviado: " . $mail->ErrorInfo . "')</script>";
        echo '<meta http-equiv="Refresh" content="0;URL=../vista/contactenos.php">';
        
    }
}