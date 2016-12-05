<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form action="Index.php" method="post">

            <label>Ingrese un Precio para filtrar todos los inmuebles: </label>
            <input name="precio" type="text"><br/>
            
            <input type="submit" value="Inmuebles" name="0"><br/>
            
            <label>Ingrese un Area para el Local comercial de Segunda: </label>
            <input name="area" type="text"><br/>

            <input type="submit" value="Locales" name="1"><br/>

            <label>Clic aca si quieres ver los Solares No Urbanos: </label>
            <input type="submit" value="Solares Rusticos" name="2"><br/>

        </form>
        <?php
        require_once './controladores/funcionesAgencia.php';
        ?>
    </body>
</html>
