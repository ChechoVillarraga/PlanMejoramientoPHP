<?php
if (!isset($_SESSION)) {
    session_start();
}

if ($_SESSION['roles_idroles'] == 2 || $_SESSION['roles_idroles'] == 3) {
    $title = 'Bienvenido!';

    include_once '../templates/navBar_1.php';
    ?>
    <link href="../css/filtroMulticriterio.css" rel="stylesheet" type="text/css"/>
    <STYLE>
        .imagenFondo{
            opacity: 0.5;
            width: 100%;
        }
    </style>
    <?php
    ?>
    <div class="container">
        <div class="row">
            <div class="panel panel-primary filterable">
                <div class="panel-heading">
                    <h3 class="panel-title">Tags</h3>
                    <div class="pull-right">
                        <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr class="filters">
                            <th><input type="text" class="form-control" placeholder="Tag" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Descripcion" disabled></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once '../../controlador/tagsController.php';
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php
    include_once '../templates/bootom.php';
//        } 
} else {

    header("Location: ../index.php");
}
?>