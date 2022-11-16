<?php 
    include "./backend/conexion.php";
    $conexion = conexion();
    $id = $_GET['id'];
    $sql = "SELECT * FROM t_usuario WHERE id = '$id'";
    $respuesta = mysqli_query($conexion, $sql);
    $item = mysqli_fetch_array($respuesta);
?> 



<?php include './header.php'; ?>

<link rel="stylesheet" href="./public/css/editarStyle.css">

<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">EDITAR USUARIO</h5>
            <form action="./backend/editarUsuario.php" method="post">
                <input type="text" hidden name ="id" value="<?php echo $item['id']; ?>">

              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="usuario" value="<?php echo $item['usuario']; ?>">
                <label for="floatingInput">Usuario</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword">Nueva Contraseña</label>
              </div>

              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">EDITAR USUARIO
                  in</button>
              </div>
              <hr class="my-4">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include './footer.php'; ?>