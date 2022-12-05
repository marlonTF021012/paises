<?php include './header.php'; ?>
<?php include './conexion.php'; ?>

<?php 
$conexion = conexion();

$sql = "SELECT * FROM t_apaises";

$result = mysqli_query($conexion, $sql);
?>
<div class="container">
    <div class="row">
        <div class="col">
                    <h1>PAISES</h1>
                    <a href="./agregar.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fa-solid fa-folder-plus"></i> AGREGAR</button></a>
                    <hr style="border-width: 2px; border-style: dashed;">
            <table class="table table-striped" style="width:100%" >
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>PAIS</th>
                        <th>CONTINENTE</th>
                        <th>IMAGEN</th>
                        
                </thead>
                <tbody>
                    <?php while( $ver = mysqli_fetch_array($result)): ?>
                    <tr>
                        <td><?php echo $ver['id'];?></td>
                        <td><?php echo $ver['nombre'];?></td>
                        <td><?php echo $ver['continente'];?></td>
                        <td><img src="<?php echo $ver['imagen'];?>" alt=""></td>
                        <td>
                        <a href="./editar.php?idp=<?php echo $ver['id'];?>" class="btn-btn danger">
                           editar
                        </a>
                        </td>
                        <td>
                        <a href="./backend/eliminar.php?idp=<?php echo $ver['id'];?>" class="btn-btn danger">
                            eliminar
                        </a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include './footer.php';?>