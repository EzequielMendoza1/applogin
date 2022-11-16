<?php session_start();
    if(isset($_SESSION['usuario'])){
    include './header.php';
    include './navbar.php';
?>


<div class="container">
    <div class="row">
        <div class="col">
            <hr>
            <h2 class="text-center">Listado de Usuario</h2>
            <?php include './tabla.php'; ?>
        </div>
    </div>
</div>

<?php
    }else{
        header('location:./index.php');
    }
?>
<?php include './footer.php'; ?>