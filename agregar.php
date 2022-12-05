<?php
include"./header.php";
?>
<html>
<div class="container mt-2">
    <h2>Agregar Nuevo Pais</h2>
    <div class="row">
        <div class="col">
            <table class="table table-dark table-striped">
                <form action="./backend/agregar.php" method="POST" enctype="multipart/form-data>
                    <label for="nombre">Pais</label>
                    <br>
                    <input type="text" name="nombre" id="nombre">
                    <br> <hr>
                    <br>
                    <label for="Continente" class="form-label">Continentes</label>
                    <br>
                     <select name="Continente" id="Continente">
                            <option value="Europa">Europa</option>
                            <option value="Africa">Africa</option>
                            <option value="America">America</option>
                            <option value="Asia">Asia</option>
                            <option value="Oceania">Oceania</option>
                    </select>
                    <br> <hr>
                    <label for="text">Bandera</label>
                    <input type="text" name="imagen"  class="form-control" id="imagen">
                    <br> <hr>
                    <button class="btn-primary">Agregar</button>
                </form>
                <a href="./index.php"><button class="btn btn-primary"><i class="fa-solid fa-share-from-square"></i>Regresar</button></a>
            </table>
        </div>
    </div>
</div>
<html>

<?php include"./footer.php";?>