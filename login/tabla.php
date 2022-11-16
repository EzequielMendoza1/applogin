<?php
    include './backend/conexion.php';
    $conexion = conexion();
    $sql = "SELECT * FROM t_usuario";
    $respuesta = mysqli_query($conexion, $sql)
?>


<table class="table table-hover table-bordered" id="tablaCrud">   
    <thead class="text-center">
        <hr>
        <tr>
            <th>USUARIO</th>
            <th>CONTRASEÑA</th>
            <th>EDITAR</th>
            <th>ELIMINAR</th>
        </tr>


        <tbody class="text-center">
        <?php
            while($ver = mysqli_fetch_array($respuesta)){
        ?>

        <tr>
            <td><?php echo strtoupper($ver['usuario']); ?></td>
            <td><?php echo strtoupper ($ver['password']); ?></td>
            <td><a href="./editarUsuario.php?id=<?php echo $ver['id']; ?>" class="btn btn-warning">Editar</a></td>
            <td><a href="./backend/eliminarUsuario.php?id=<?php echo $ver['id']; ?>" class="btn btn-danger">Eliminar</a></td>
        </tr>



        <?php } ?>

    </thead>
</table>