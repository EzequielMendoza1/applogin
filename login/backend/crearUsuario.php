<?php
    include './conexion.php';
    $conexion = conexion();

    $usuario = $_POST['usuario'];
    $password = sha1($_POST['password']);

    $sql = "INSERT INTO t_usuario (usuario, password)
            VALUES ('$usuario', '$password')";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        header ('location:../index.php');
    }else{
        echo 'No se pudo crear el usuario';
    }
?>