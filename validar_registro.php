
<?php if(isset($_POST['submit'])) : 
require "includes/funciones/funciones.php";
  $nombre = clean($_POST['nombre']);
  $apellido = clean($_POST['apellido']);
  $email = clean($_POST['email']);
  $regalo = clean($_POST['regalo']);
  $total = clean($_POST['total_pedido']);
  $fecha = date('Y-m-d H:i:s');
  //echo "$nombre . $apellido . $email . $regalo. $total";
  //Pedidos
  $boletos = $_POST['boletos'];
  $camisas = $_POST['pedido_camisas'];
  $etiquetas = $_POST['pedido_etiquetas'];
  $pedido = productos_json($boletos, $camisas, $etiquetas);
  $eventos = $_POST['registro'];
  $registro = eventos_json($eventos);
  try {
   require "includes/funciones/bd_conexion.php";
   $stmt = $conn->prepare("INSERT INTO registrados (nombre_registrado, apellido_registrado, email_registrado, fecha_registro, pases_articulos, talleres_registrados, regalo, total_pagado) VALUES (?,?,?,?,?,?,?,?)");
   $stmt->bind_param("ssssssis", $nombre, $apellido, $email, $fecha, $pedido, $registro, $regalo, $total);
   $stmt->execute();
   $stmt->close();
   header('Location:validar_registro.php?exitoso=1');
   $conn->close();
 } catch (\Exception $e) {
     echo $e->getMessage();
 }
 
 ?>
 <?php endif; ?>

<?php require "includes/templates/header.php"; ?>

<section class="seccion contenedor">
<h2>Resumen Registro</h2>
     
   <?php

     if (isset($_GET['exitoso'])) {
       if ($_GET['exitoso'] == 1) {
         echo "Registro Exitoso";
       }
     }

   ?>

</section>



<?php require "includes/templates/footer.php"; ?>