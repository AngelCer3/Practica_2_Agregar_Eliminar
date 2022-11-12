<?php 
    include "../conexion.php";
    $conexion = conexion();
    $animal = $_POST['animal'];
    $region = $_POST['region'];
    $comida = $_POST['comida'];
    $sql = "INSERT INTO t_animales (animal,region,comida) VALUES ('$animal','$region','$comida')";
    $resultado = mysqli_query($conexion,$sql);

    if($resultado){
        header('location:../index.php');
    }else{
        echo "No se pudo insertar";
    }
?>