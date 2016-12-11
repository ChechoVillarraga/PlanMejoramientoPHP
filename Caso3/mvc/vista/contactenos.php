<?php
$title = 'Contactenos!';
include_once '../controlador/EmailerController.php';
include_once './templates/navBar.php';
?>
<STYLE>
    .text-right{
        background-color: graytext;

    }
    .contenedores{
        margin-bottom: 20px;
        font-family: sans-serif;
        font-size: 18px;
    }
</style>
<DIV class="container-fluid imagenFondo">
    <DIV class=" imagen">
        <H1>Contactenos!</H1>
        <form name="NOmbre" 
              method="POST" 
              enctype="multipart/form-data"
              action= "<?php echo $_SERVER["PHP_SELF"] ?>"
              >
            <DIV class="col-lg-6 col-md-6 col-sm-6 col-xs-6 contenedores text-right"> 
                Nombres completos: 
            </div>
            <DIV class="col-lg-6 col-md-6 col-sm-6 col-xs-6 contenedores"> 
                <input type="text" name="name" value="" />
            </div>
            <DIV class="col-lg-6 col-md-6 col-sm-6 col-xs-6 contenedores text-right"> 
                Correo Electronico:
            </div>
            <DIV class="col-lg-6 col-md-6 col-sm-6 col-xs-6 contenedores"> 
                <input type="text" name="email" value="" />
            </div>
            <DIV class="col-lg-6 col-md-6 col-sm-6 col-xs-6 contenedores text-right"> 
                Pagina de Contacto:
            </div>
            <DIV class="col-lg-6 col-md-6 col-sm-6 col-xs-6 contenedores"> 
                <input type="text" name="website" value="" />
            </div>
            <DIV class="col-lg-6 col-md-6 col-sm-6 col-xs-6 contenedores text-right"> 
                Mensaje:
            </div>
            <DIV class="col-lg-6 col-md-6 col-sm-6 col-xs-6 contenedores"> 
                <textarea value="message" rows="4" cols="20" name="message">
                </textarea>
            </div>
            <DIV class="col-lg-6 col-md-6 col-sm-6 col-xs-6 contenedores text-right"> 
                <input type="hidden" name="phpmailler"/>
                <input type="submit" value="Enviar" class="btn-primary" name="phpmailler"/>
            </div>
            <DIV class="col-lg-6 col-md-6 col-sm-6 col-xs-6 contenedores"> 
            <input type="reset" value="Limpiar" class="btn-warning"/>
            </div>
        </form>

    </DIV>
</DIV>
<?php
include_once './templates/bootom.php';
?>
