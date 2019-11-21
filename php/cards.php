<?php
require_once "conexion.php";
$conexion = new conect();
$conectar = $conexion->conectar();
$result = mysqli_query($conectar, "SELECT * FROM VACANTE");

while ($row = mysqli_fetch_row($result)) {
    ?>

    <div class="card">
        <div style="background: background: #1e5799; /* Old browsers */
    background: -moz-linear-gradient(top,  #1e5799 19%, #207cca 24%, #207cca 24%, #2989d8 50%, #7db9e8 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(top,  #1e5799 19%,#207cca 24%,#207cca 24%,#2989d8 50%,#7db9e8 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to bottom,  #1e5799 19%,#207cca 24%,#207cca 24%,#2989d8 50%,#7db9e8 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#7db9e8',GradientType=0 ); /* IE6-9 */">
            <i class="fa fa-user-tie" style="font-size: 120px;padding:20px"></i>
        </div>
        <h3>Vacante</h3>
        <p><?php echo $row[1] ?></p>
        <h3>Area</h3>
        <p><?php echo $row[2] ?></p>
        <p><?php echo $row[6] ?></p>
        <div class="oculto">
            <h3>Requisitos</h3>
            <ul>
                <li><?php echo "Edad: De " . $row[3] . " a " . $row[4]  ?></li>
                <li><?php echo "Sexo: " . $row[5] ?></li>
                <li><?php if ($row[7] == 1) {
                            echo "Clave Única de Registro de Población (CURP)";
                        }
                        ?></li>
                <li><?php if ($row[8] == 1) {
                            echo "Acta De Nacimiento";
                        }
                        ?></li>
                <li><?php if ($row[9] == 1) {
                            echo "Carta De Pasante O Titulado";
                        }
                        ?></li>
                <li><?php if ($row[10] == 1) {
                            echo "Comprobante De Domicilio";
                        }
                        ?></li>
            </ul>
        </div>
    </div>
<?php
}
?>