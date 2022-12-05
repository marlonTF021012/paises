<?php include './header.php'; ?>


<?php 
    include './conexion.php';
    $conexion=conexion();
    $id=$_GET['idp'];
    $sql = "SELECT * FROM t_apaises WHERE id = $id";
    $resultado = mysqli_query($conexion, $sql);

    $item = mysqli_fetch_array($resultado);

?>

<div class="container">
    <div class="row">
        <div class="col">
            <center>
            <div class="card mt-4" id="cuerpoCard" style="width: 18rem;">
                <div class="body-card">
                    <center><h1 class="card-title" style="font-family: 'Alex Brush', cursive;">Editar Pais</h1></center>
                    <center>
                    <form action="./backend/actualizar.php" method="post">
                        <input type="text" name="id" value="<?php echo $id; ?>" hidden>
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" value="<?php echo $item['nombre'] ?>">
                        <br>
                        <label for="continente">Continente</label>
                            <select name="continente" id="continente" class="form-select" value="<?php echo $item['continente']?>"style="width:150px">
                                <option value="America">America</option>
                                <option value="Europa">Europa</option>
                                <option value="Asia">Asia</option>
                                <option value="Oceania">Oceania</option>
                                <option value="Africa">Africa</option>
                            </select>
                        <br>
                        <label for="imagen">imagen</label>
                        <input type="text" name="imagen" id="imagen" value="<?php echo $item['imagen'] ?>">
                        <br>
                        <button class="btn-sm" style="background-color:blue;" >agregar</button>
                        <a href="./index.php" class="btn btn-danger">Cancelar</a>
                    </form>
                    </center>
                </div>
            </div>
            </center>
        </div>
     </div>
</div>
<?php include './footer.php';?>