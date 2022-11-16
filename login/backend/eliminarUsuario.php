<?php session_start();
    include "./conexion.php";
    $conexion = conexion();
    $id = $_GET['id'];


    $sql = "DELETE FROM t_usuario WHERE id = '$id'";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        header("location:../usuarios.php");
    }else {
        echo "No se puede borrar el registro";
    }

?>