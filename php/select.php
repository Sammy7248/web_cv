<option selected>Selecciona Vacante</option>
<?php
    require_once "conexion.php";
    $conexion = new conect();
    // VAMOS A CREAR LA TABLA DE VACANTES, DE POSTULADOS.
    // INVESTIGAR COMO ENCRIPTAR CONTRASEÑA DE UNA FORMA SEGURA
    $vacantes = "SELECT EMAIL FROM SUPERUSER";
    $consulta = mysqli_query($conexion->conectar(), $vacantes);

    while($row=mysqli_fetch_row($consulta)){
?>

<option value="1"><?php echo $row[0]?></option>

<?php
    }
?>