<?php require "funciones/sesiones.php" ?>

<?php require "funciones/funciones.php" ?>

<?php require "templates/header.php" ?>

<?php include_once "templates/barra.php" ?>

<?php include_once "templates/navegacion.php" ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Crear administrador</h1>
          <small>Llena el formulario para crear un administrador</small>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <div class="row">
    <div class="col-md-8">



      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Crear administrador</h3>


          </div>
          <div class="card-body">
            <!-- form start -->
            <form method="POST" action="" id="formulario">
              <div class="card-body">
                <div class="form-group">
                  <label for="usuario">Usuario</label>
                  <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario">
                </div>

                <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu Nombre">
                </div>

                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password para iniciar sesión">
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <input type="hidden" id="registrar" name="registro" value="nuevo"></input>
                <button type="submit" class="btn btn-primary">Añadir</button>
              </div>
            </form>
          </div>
          <!-- /.card-body -->

        </div>
        <!-- /.card -->

      </section>
    </div>
  </div>
  <!-- /.content -->
  <!-- /.content-wrapper -->

  <?php include_once "templates/footer.php"; ?>