 <?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


require_once '../Services/controller/Mail.php';
$message='
    <div class="bg-success col-lg-4" style="background-color: #bbb " >
        <div style="background-color: #ccc">
        <div style="background-color: #aaa"><h2 style="color: #000"><b>Asignación de Pregunta</b></h2></div>
        
        <p>Le a sido asignado una pregunta por favor verifique 
            y respondala en un tiempo menor de 2 días.</p>
        <div style="background-color: #eee"><h3>Pregunta No. 100</h3></div>
        </div>
    </div>';
$correo=new Mail("Gildardo Aguirre", "gaguirre5@misena.edu.co", "Prueba de la clase", $message);
$correo->configurarCorreoOrigen("gildardoaguirrerios@gmail.com", "G87A10R29");
$correo->enviarCorreo();
