<option selected>Selecciona Vacante</option>
<?php
    require_once "conexion.php";
    $conexion = new conect();
    $vacantes = "SELECT ID_VACANTE,NOMBRE_VACANTE, AREA FROM VACANTE";
    $consulta = mysqli_query($conexion->conectar(), $vacantes);

    while($row=mysqli_fetch_row($consulta)){
?>

<option value="<?php $row[0]?>"><?php echo $row[1]." De ".$row[2]?></option>

<?php
    }
?>