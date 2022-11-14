<?php 
    include "./header.php";
?>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-4">
                    <div class="body-card" style="background-color:plum ;">
                        <form action="./backend/agregar.php" method="POST">
                        <label for="animal">Animal</label>
                        <input type="text" name="animal" id="animal" class="form-control">
                        <br>
                        <label for="region">Region</label>
                        <input type="text" name="region" id="region" class="form-control">
                        <br>
                        <label for="comida">Comida</label>
                        <input type="text" name="comida" id="comida" class="form-control">
                        <br>
                        <button class="btn btn-success"><i class="fa-brands fa-twitter"></i>Agregar</button>
                        </form>
                        <br>
                        <a href="./index.php"><button class="btn btn-primary"><i class="fa-solid fa-share-from-square"></i>Regresar</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include "./footer.php"?>