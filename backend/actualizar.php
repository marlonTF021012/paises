<?php 
    include "../conexion.php";
    $conexion = conexion();
    $id = $_POST['id'];
    $nombre =$_POST['nombre'];
    $continente =$_POST['continente'];
    $imagen = $_POST['imagen'];

    $sql = "UPDATE t_apaises SET nombre='$nombre', continente='$continente', imagen= '$imagen' WHERE id='$id'"; 
    $result = mysqli_query($conexion, $sql);

    if ($result){
        header('location: ../index.php');

    }else{

        echo "Error";
    }

?>