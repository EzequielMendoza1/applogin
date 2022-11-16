<?php session_start();
    if(isset($_SESSION['usuario'])){
    include './header.php';
    include './navbar.php';
?>


<div class="container">
    <div class="row">
        <div class="col">
            <h2>Inicio de proyecto</h2>
        </div>
    </div>
</div>

<?php
    }else{
        header('location:./index.php');
    }
?>
<?php include './footer.php'; ?>