<?php session_start(); 
    if (isset($_SESSION['usuario'])) {
        header('location:./inicio.php');
    }
?>
<?php include './header.php'; ?>
<link rel="stylesheet" href="./public/css/loginStyle.css">
<div class="container-fluid ps-md-0">
  <div class="row g-0">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">LOGIN USUARIO</h3>

              <!-- Sign In Form -->
              <form action="./backend/logear.php" method="post">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="usuario">
                  <label for="floatingInput">USUARIO</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                  <label for="floatingPassword">CONTRASEÑA</label>
                </div>

                <div class="d-grid">
                  <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">ENTRAR</button>
                  <div class="text-center">
                    <a class="small" href="./registro.php">REGISTRAR</a>
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include './footer.php'; ?>