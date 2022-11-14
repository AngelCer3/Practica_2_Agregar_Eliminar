<?php 
    include "./header.php";
    include "./conexion.php";
    $conexion = conexion();
    $id = $_GET['idp'];
    $sql = "SELECT * FROM t_animales WHERE id='$id'";

    $respuesta = mysqli_query($conexion,$sql);
    $item = mysqli_fetch_array($respuesta);
?>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-4">
                    <div class="body-card" style="background-color:plum ;">
                        <form action="./backend/actualizar.php" method="POST">
                        <input type="text" name="id" value="<?php echo $id; ?>" hidden>
                        <label for="animal">Animal</label>
                        <input type="text" name="animal" id="animal" class="form-control" value="<?php echo $item['animal']?>">
                        <br>
                        <label for="region">Region</label>
                        <input type="text" name="region" id="region" class="form-control" value="<?php echo $item['region']?>">
                        <br>
                        <label for="comida">Comida</label>
                        <input type="text" name="comida" id="comida" class="form-control" value="<?php echo $item['comida']?>">
                        <br>
                        <button class="btn btn-success"><i class="fa-brands fa-twitter"></i>Actualizar</button>
                        </form>
                        <br>
                        <a href="./index.php"><button class="btn btn-primary"><i class="fa-solid fa-share-from-square"></i>Regresar</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include "./footer.php"?>