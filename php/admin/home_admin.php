<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrador</title>
    <?php
    require "css.php";
    require "modal_admin_vac/logout.php";
    require "modal_admin_vac/add_vac.php";
    require "modal_admin_vac/add_user.php";
    ?>
    <link rel="stylesheet" type="text/css" href="../../css/admin_main.css">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col col-md-12">
                <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                    <div class="container-fluid" id="menu">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="sr-only"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand">Grupo
                                    Antolin Silao</a>
                            </div>
                            <div class="collapse navbar-collapse" id="myNavbar">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="#inicio" id="inicio"><span class="glyphicon glyphicon-home"></span>&nbsp;Inicio</a></li>
                                    <li><a href="#vacantes" id="vacantes"><span class="glyphicon glyphicon-user"></span>&nbsp;Vacantes</a></li>
                                    <li><a href="#postulados" id="postulados"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;Postulados</a>
                                    <li><a href="#logout" id="salir"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Cerrar Sesi&oacute;n</a></li>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading" style="background: #428bca">
                Eventos
            </div>
        </div>
        <div class="panel-body">
            <button style="margin: 5px;" class="btn btn-warning btn-md col-md-2" data-toggle="modal" data-target="#modal_add_vac"><i class="glyphicon glyphicon-log-out"></i>&nbsp;Agregar Vacante</button>
            <button style="margin: 5px;" class="btn btn-primary btn-md col-md-2" data-toggle="modal" data-target="#add_user_modal"><i class="glyphicon glyphicon-user"></i>&nbsp;Agregar Usuario</button>
        </div>
    </div>
    <div id="cont_tables">

    </div>

    <?php
    require "js.php";
    ?>
    <script type="text/javascript" src="../../js/admin_main.js"></script>
    <script>
        $(document).ready(function() {
            // $("#datatable_vacantes").load("../datatable/tab_vac.php");

            $("#salir").click(function() {
                $("#log_out").modal("show");
            });

            $("#vacantes").click(function() {
                $("#cont_tables").load("tabla_vac.php");
            });

            $("#postulados").click(function() {
                $("#cont_tables").load("tabla_post.php");
            });


        });
    </script>
</body>

</html>