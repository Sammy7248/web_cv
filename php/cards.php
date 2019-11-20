<?php
require_once "conexion.php";
$conexion = new conect();
$conectar = $conexion->conectar();
$result = mysqli_query($conectar, "SELECT * FROM VACANTE");

while ($row = mysqli_fetch_row($result)) {
    ?>

    <div class="card">
        <div style="background: #11406D;">
            <img src="../image/logo.jpeg">
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
        <div style="background: #11406D;height: 30px;">
        </div>
    </div>

<?php
}
?>