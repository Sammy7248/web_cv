<?php
require_once "../conexion.php";
$con = new conect();
$conexion = $con->conectar();
// $query = "SELECT COUNT(*) FROM POSTULADOS";
$res_postul = mysqli_query($conexion, "SELECT COUNT(*) FROM POSTULADOS");
$res_vac = mysqli_query($conexion, "SELECT COUNT(*) FROM VACANTE");
$res_users = mysqli_query($conexion, "SELECT COUNT(*) FROM SUPERUSER");
?>


<div class="container-fluid">
    <div class="panel panel-striped panel-default">
        <div class="panel-heading" style="background: #428bca;">
            Panel de Inicio
        </div>
        <div class="panel-body">
            <div class="col col-md-12">
                <div class="col col-md-4">
                    <div class="counter">
                        <i class="fa fa-id-card"></i>
                        <?php
                            while($row_vac=mysqli_fetch_row($res_vac)){
                        ?>
                        <h2 class="timer count-tittle count-number"><?php echo $row_vac[0]?></h2>
                        <?php
                            }
                        ?>
                        <p class="count-text">Vacantes</p>
                    </div>
                </div>
                <div class="col col-md-4">
                    <div class="counter">
                        <i class="glyphicon glyphicon-folder-open"></i>
                        <?php
                            while($row_post=mysqli_fetch_row($res_postul)){
                        ?>
                        <h2 class="timer count-tittle count-numer"><?php echo $row_post[0]?></h2>
                        <?php
                            }
                        ?>
                        <p class="count-text">Postulados</p>
                    </div>
                </div>
                <div class="col col-md-4">
                    <div class="counter">
                        <i class="glyphicon glyphicon-user"></i>
                        <?php
                            while($row_us=mysqli_fetch_row($res_users)){
                        ?>
                        <h2 class="timer count-tittle count-number"><?php echo $row_us[0]?></h2>
                        <?php
                            }
                        ?>
                        <p class="count-text">Usuarios</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .counter {
        padding-top: 5%;
        margin-bottom: 5%;
        border-radius: 9px;
        border: 2px solid #428bca;
    }

    .counter i {
        font-size: 50px;
        margin-left: 46%;
        margin-right: 47%;
        color: #428bca;
        align-self: center;
    }

    .counter p {
        font-size: 30px;
        color: #428bca;
        text-align: center;
    }

    .counter h2 {
        text-align: center;
        color: #428bca;
    }
</style>