<?php

    require_once "conexion.php";
    $conexion = new conect();
    $conectar = $conexion->conectar();

    $vacante_id = $_POST["vacante_id"];
    $nombres = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $estado = $_POST["estado"];
    $ciudad = $_POST["ciudad"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $capacidades = $_POST["capacidades"];
    // $path = $_FILES['cv']["name"];

    
    $nombre = $_FILES['cv']['name'];
    $guardado = $_FILES['cv']['tmp_name'];
    $path = '/cv/'.$nombre;

    if(move_uploaded_file($guardado, $path)){
        $result = mysqli_query($conectar, "INSERT INTO POSTULADOS(ID_VACANTE, NOMBRES, APELLIDOS, CIUDAD, ESTADO, TELEFONO, EMAIL, CAPACIDADES, CV_PATH) VALUES ('$vacante_id','$nombres','$apellido','$ciudad', '$estado','$telefono','$correo','$capacidades','$path')");
    }
    else{
       $conectar->rollback();
    }
    

?>