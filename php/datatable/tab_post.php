<?php
require_once "../conexion.php";
$con = new conect();
$conexion = $con->conectar();
$query = "SELECT * FROM  POSTULADOS";
$res_postul = mysqli_query($conexion, $query);
?>

<table class="table table-bordered table-striped table-hover" id="tab_post" style="width: 100%;">
    <thead style="background: #428bca; color: white;font-weight: 600;font-size: 20px;">
        <tr>
            <td>Nombre(s)</td>
            <td>Apellidos</td>
            <td>Ciudad</td>
            <td>Estado</td>
            <td>Telefono</td>
            <td>E-Mail</td>
            <td>Capacidades</td>
            <td>Opciones</td>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = mysqli_fetch_row($res_postul)) {
            ?>
            <tr>
                <td><?php echo $row[2] ?></td>
                <td><?php echo $row[3] ?></td>
                <td><?php echo $row[4] ?></td>
                <td><?php echo $row[5] ?></td>
                <td><?php echo $row[6] ?></td>
                <td><?php echo $row[7] ?></td>
                <td><?php echo $row[8] ?></td>
                <td>
                    <button title="Descargar CV" class="btn btn-success btn-sm" id="download_cv" name="download_cv"><i class="glyphicon glyphicon-download"></i></button>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>


<script>
    $(document).ready(function() {
        $("#tab_post").DataTable({
            "languaje": {
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sSearch": "Buscar:",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Último",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                },
                "sProcessing": "Procesando...",
            },
            "processing": true,
            "columnDefs": [{
                targets: -1,
                className: "dt-body-right",
            }]
        });
    });
</script>