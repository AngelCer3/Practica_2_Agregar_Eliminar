<?php
    include "../conexion.php";
    $conexion = conexion();
    $id = $_POST['id'];
    $animal = $_POST['animal'];
    $region = $_POST['region'];
    $comida = $_POST['comida'];

    $sql = "UPDATE t_animales SET animal = '$animal' , region = '$region' , comida = '$comida' WHERE id ='$id'";
    $respuesta = mysqli_query($conexion,$sql);

    if($respuesta){
        header('location:../index.php');
    }else{
        echo "No se pudo actualizar";
    }
?>