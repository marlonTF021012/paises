<?php 
 include "../conexion.php";
$conexion = conexion();
$nombre =$_POST['nombre'];
$continente =$_POST['continente'];
$imagen = $_POST['imagen'];

$sql = "INSERT INTO t_apaises (nombre,continente,imagen) VALUES ('$nombre','$continente','$imagen')";
$resultado = mysqli_query($conexion,$sql);

    if ($resultado){
        header('location:../index.php');
    }else{
        echo "error";
    }

?>