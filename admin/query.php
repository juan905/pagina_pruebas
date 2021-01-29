<?php
require_once "editar-admin.php";

$sql = ("SELECT * FROM admins WHERE id_admin = $id");
$resultado = $conn->query($sql);
$admin = $resultado->fetch_assoc();
