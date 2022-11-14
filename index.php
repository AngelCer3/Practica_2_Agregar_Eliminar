<?php 
    include "./conexion.php";
    include "./header.php";

    $conexion = conexion();

    //crear el query de select

    $sql = "SELECT * FROM t_animales";
    $respuesta = mysqli_query($conexion,$sql);
?>

<div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-4" id="tarjeta">
                    <div class="card-body">
                        <center><h2>Animales</h2></center>
                        <center><p>
                        <a href="./agregar.php"><button class="btn btn-primary"><i class="fa-brands fa-twitter"></i>Agregar nuevo Animal</button></a>
                        </p></center>
                        <br>
                        <center><table border="2" id="tabla"></center>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Animal</th>
                                <th>Region</th>
                                <th>Comida</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($ver = mysqli_fetch_array($respuesta)):?>
                            <tr>
                                <td><?php echo $ver['id'];?></td>
                                <td><?php echo $ver['animal'];?></td>
                                <td><?php echo $ver['region'];?></td>
                                <td><?php echo $ver['comida'];?></td>
                                <td>
                                    <center><a href="./editar.php?idp=<?php echo $ver['id']; ?>"><button class="btn btn-success"><i class="fa-solid fa-user-pen"></i>Editar</button></a></center>
                                </td>
                                <td>
                                    <center><a href="./backend/eliminar.php?idp=<?php echo $ver['id']; ?>"><button class="btn btn-warning"><i class="fa-solid fa-user-xmark"></i>Eliminar</button></a></center>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                        </table>
                    </div>     
                </div>
            </div> 
        </div>
    </div>

<?php include "./footer.php";?>