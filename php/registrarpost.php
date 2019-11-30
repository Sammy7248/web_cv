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
    $path = '../cv/'.$nombre;
    $have_cv = false;
    // SI SE ENVIAN LOS DATOS, EL PEDO ES EN LA CONDICION
    // mysqli_query($conectar, "INSERT INTO POSTULADOS(ID_VACANTE, NOMBRES, APELLIDOS, CIUDAD, ESTADO, TELEFONO, EMAIL, CAPACIDADES, CV_PATH) VALUES ('$vacante_id','$nombres','$apellido','$ciudad', '$estado','$telefono','$correo','$capacidades','$path')");
    
    if(move_uploaded_file($guardado, $path) and $path){
        $have_cv = true;
        mysqli_query($conectar, "INSERT INTO POSTULADOS(ID_VACANTE, NOMBRES, APELLIDOS, CIUDAD, ESTADO, TELEFONO, EMAIL, CAPACIDADES, CV_PATH, HAVE_CV) VALUES ('$vacante_id','$nombres','$apellido','$ciudad', '$estado','$telefono','$correo','$capacidades','$path','$have_cv')");
    }
    else{
        mysqli_query($conectar, "INSERT INTO POSTULADOS(ID_VACANTE, NOMBRES, APELLIDOS, CIUDAD, ESTADO, TELEFONO, EMAIL, CAPACIDADES, HAVE_CV) VALUES ('$vacante_id','$nombres','$apellido','$ciudad', '$estado','$telefono','$correo','$capacidades','$have_cv')");
    //    $conectar->rollback();
    }
    

?>