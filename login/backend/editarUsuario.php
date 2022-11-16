<?php session_start();
    include "./conexion.php";
    $conexion = conexion();
    $id = $_POST['id'];
    $usuario = $_POST['usuario'];
    $password = sha1($_POST['password']);

    $sql = "UPDATE t_usuario 
            SET usuario = '$usuario',
                password = '$password' 
            WHERE id = '$id'";
    $respuesta = mysqli_query($conexion, $sql);
    if ($respuesta){

        header ('location:../usuarios.php');
    }else{
        echo 'No se pudo :(';
    }
?>