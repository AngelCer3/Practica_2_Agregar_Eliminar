<?php
    include "../conexion.php";
    $conexion = conexion();
    $id = $_GET['idp'];

    $sql = "DELETE FROM t_animales WHERE id = '$id'";
    $resultado = mysqli_query($conexion,$sql);

    if($resultado){
        header('location:../index.php');
    }else{
        echo "No se pudo eliminar";
    }
?>