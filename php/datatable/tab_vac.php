<?php
require_once "../conexion.php";
require "../admin/modal_admin_vac/edit_vac.php";
require "../admin/modal_admin_vac/del_modal.php";
$con = new conect();
$conexion = $con->conectar();
$query = "SELECT * FROM VACANTE";
$res = mysqli_query($conexion, $query);
$sexo = ["M"=>"Masculino", "F"=>"Femenino","I"=>"Indistinto"];
$estatus = ["D"=>"Disponible","O"=>"Ocupado"];
?>

<table class="table table-bordered table-hover" style="width: 100%;" id="tab-vac">
    <thead style="background: #428bca; color: white;font-weight: 600;font-size: 20px;">
        <tr>
            <td>Puesto</td>
            <td>Area</td>
            <td>Sexo</td>
            <td>Experiencia</td>
            <td>Publicaci&oacute;n</td>
            <td>Modificaci&oacute;n</td>
            <td>Estatus</td>
            <td>Opciones</td>
        </tr>
    </thead>

    <tbody style="font-size: 17px;font-weight: 500;">
        <?php
        while ($row = mysqli_fetch_row($res)) {
            ?>
            <tr>
                <td><?php echo $row[1] ?></td>
                <td><?php echo $row[2] ?></td>
                <td><?php echo $sexo[$row[5]] ?></td>
                <td><?php echo $row[6] ?></td>
                <td><?php echo $row[11] ?></td>
                <td><?php echo $row[12] ?></td>
                <td><?php echo $estatus[$row[13]] ?></td>
                <td>
                    <button value="<?php echo $row[0]?>" class="btn btn-info btn-sm" title="Editar" data-target="#edit_vac" data-toggle="modal"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button value="<?php echo $row[0]?>" class="btn btn-danger btn-sm" title="Eliminar" data-target="#del_vac" data-toggle="modal"><i class="glyphicon glyphicon-trash"></i></button>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<script>
    $(document).ready(function() {

        aoColumns = [{
            sWidth: '15%',
            bSortable: false,
        }, {
            sWidth: '15%',
            bSortable: false,
        }, {
            sWidth: '10%',
            bSortable: false,
        }, {
            sWidth: '20%',
            bSortable: false,
        }, {
            sWidth: '40%',
            bSortable:false
        }
        ];

        $("#tab-vac").DataTable({
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
            // columns:aoColumns
            "processing": true,
            "columnDefs": [
            {
                targets: -1,
                className:  "dt-body-right", 
            }
        ]
        });
    });
</script>