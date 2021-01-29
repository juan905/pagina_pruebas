<?php

error_reporting(E_ALL ^ E_NOTICE);


$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$password = $_POST['password'];
$accion = $_POST['accion'];

if ($accion == 'nuevo') {
    //Codigo para crear administradores

  //Hashear el password

  $opciones = array(
    'cost' => 12
  );
  $hash_password = password_hash($password, PASSWORD_BCRYPT, $opciones);

  $respuesta = array(
   'pass' => $hash_password,
  );
  //echo json_encode($respuesta);


  require_once "../../conexion/conexion.php";

  try {
    $stmt = $conn->prepare("INSERT INTO admins (usuario, nombre, password) VALUES (?, ?, ?)");
    $stmt->bind_param('sss', $usuario, $nombre, $hash_password);
    $stmt->execute();
   if ($stmt->affected_rows === 1) {
        $respuesta = array(
          'respuesta' => 'correcto',
          'id_insertado' => $stmt->insert_id,
          'nombre' => $nombre,
          'tipo' => $accion
        );
   } else {
     $respuesta = array(
      'respuesta' => 'error',
      'usuario' => $usuario
     );
   }
    $stmt->close();
    $conn->close();
   } catch (\Exception $e) {
     $respuesta = array(
       'error' => $e->getMessage()
      );
   }

   echo json_encode($respuesta);

}

if ($accion == 'login') {
  # Escribir el codigo para que se loguien

  //echo json_encode($_POST);
  

 require_once "../../conexion/conexion.php";

  try {
    # Seleccionar el admin de la base de datos

    $stmt = $conn->prepare("SELECT usuario, id_admin, password FROM admins WHERE usuario = ?");
    $stmt->bind_param('s', $usuario);
    $stmt->execute();
    $stmt->bind_result($nombre_usuario, $id_usuario, $contraseña);
    $stmt->fetch();
    if ($nombre_usuario) {
      //El usuario existe, verificar el password
      if (password_verify($password, $contraseña)) {
        //Iniciar la sesion
        session_start();
        $_SESSION['usuario'] = $nombre_usuario;
        $_SESSION['id'] = $id_usuario;
        $_SESSION['login'] = true;
        //Login correcto
        $respuesta = array(
          'respuesta' => 'correcto',
          'nombre' => $nombre_usuario,
          'tipo'=> $accion
        );
      } else{
        //Login incorrecto
        $respuesta = array(
          'resultado' => 'Password Incorrecto'
        );
        
      }
      
    } else{
      $respuesta = array(
        'error' => 'El usuario no existe'
      );
    }
    $stmt->close();
    $conn->close();
    } catch (\Exception $e) {
    $respuesta = array(
      'error' => $e->getMessage()
     );
  }

  echo json_encode($respuesta);
}



?>