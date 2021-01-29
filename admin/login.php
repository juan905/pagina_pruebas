<?php 
error_reporting(E_ALL ^ E_NOTICE);
session_start();
$cerrar_sesion = $_GET['cerrar_sesion'];

if ($cerrar_sesion) {
  session_destroy();
}


require "funciones/funciones.php";
require "templates/header.php" ;



?>


  <body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="../index.php"><b>GDL</b>WEBCAMP</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>
       
        <form  id="formulario" method="POST" action="">
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="usuario" id="usuario" placeholder="usuario">
            <input type="hidden" id="nombre" value="crear"> 
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
            </div>
            <!-- /.col -->
            <div class="col-4">
              <input type="hidden" id="registrar" value="login">
              <button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <!-- /.social-auth-links -->
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <?php include_once "templates/footer.php";?>