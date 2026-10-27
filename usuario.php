<?php 
// importar la conexion
require  'includes/config/database.php';
$db = conectarDB();
//email password
$email = "correo@example.com";
$password = "123456";
$passwordHash= password_hash($password, PASSWORD_BCRYPT);
//query
$query = "INSERT INTO usuarios (email, password) VALUES ('${email}', '${passwordHash}')";
//base de datos
mysqli_query($db, $query);
