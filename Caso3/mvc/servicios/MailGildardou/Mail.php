<?php

require_once 'class.phpmailer.php';
require_once 'class.smtp.php';
class Mail {
    //put your code here
    private $nombreRemitente;
    private $emailDestino;
    private $asuntoMail;
    private $mensaje;
    private $mail;
    private $mailRemitente;
/**
 * 
 * @param type $nombreDestino
 * @param type $emailDestino
 * @param type $asuntoMail
 * @param type $mensaje
 * @example description Gildardo Aguirre- debes entregar los datos del mensaje a enviar
 */    
    function __construct($nombreDestino, $emailDestino, $asuntoMail, $mensaje) {
        $this->nombreRemitente = $nombredestino;
        $this->emailDestino = $emailDestino;
        $this->asuntoMail = $asuntoMail;
        $this->mensaje = $mensaje;
        $this->mail = new PHPMailer();
    }

    /**
     * 
     * @param type $ctaEmail
     * @param type $contraseñaMail
     * @throws  debes entregar la informacion del correo de donde se quiere enviar el correo
     */
        public function configurarCorreoOrigen($ctaEmail,$contraseñaMail) {
            //indico a la clase que use SMTP
            $this->mail->isSMTP();
            //permite modo debug para ver mensajes de las cosas que van ocurriendo
            $this->mail->SMTPDebug = 2;
            //se define el uso de autenticación
            $this->mail->SMTPAuth=TRUE;
            $this->mail->SMTPSecure="ssl";
            //se define el servidor en este caso para gmail
            $this->mail->Host = "smtp.gmail.com";
            //Puerto que usa gmail
            $this->mail->Port=465;
            //indico un usuario / clave de un usuario de gmail
             $this->mail->Username = $ctaEmail;
             $this->mail->Password = $contraseñaMail;
             $this->mailRemitente=$ctaEmail;
        }
        /**
         * @todo con este methodo se hace el envio del correo, 
         * recuerde siempre debe generar ejecutar el metodo de configuracion 
         * configurarCorreoOrigen - este seguro de los parametros entregados.
         */
        public function enviarCorreo() {
            
            $this->mail->From=$mailRemitente;
            $this->mail->FromName="Sistema de Gestion Preguntas";
            $this->mail->addAddress($this->emailDestino);
            $this->mail->Subject=$this->asuntoMail;
            $this->mail->isHTML(true);
            $this->mail->msgHTML($this->mensaje);
            if ($this->mail->send()){
                echo 'Correo enviado';
        }else{
            echo 'Correo NO enviado';
        }
        }

    
}
