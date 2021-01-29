<?php require "funciones/sesiones.php";
require "funciones/funciones.php";

$id = $_GET['id'];

if (!filter_var($id, FILTER_VALIDATE_INT)) {
    die("Error");
}


require "templates/header.php";

include_once "templates/barra.php";

include_once "templates/navegacion.php";
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Editar administrador</h1>
                    <small>Puedes editar los datos del administrador</small>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="row">
        <div class="col-md-8">



            <!-- Main content -->
            <section class="content">

                <?php require_once "query.php" ?>
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Editar administrador</h3>
                    </div>
                    <div class="card-body">
                        <!-- form start -->
                        <form role="form" name="guardar-registro" id="guardar-registro" method="POST" action="modelo-admin.php">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="usuario">Usuario</label>
                                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" value="<?php echo $admin['usuario']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu Nombre" value="<?php echo $admin['nombre']; ?>">
                                </div>

                                <div class=" form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password para iniciar sesión">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <input type="hidden" name="registro" value="actualizar"></input>
                                <input type="hidden" name="id_registro" value="<?php echo $id; ?>">
                                <button type="submit" class="btn btn-primary">Guardar</button>
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