<?php 
$conexion = mysqli_connect("localhost", "root", "", "r_user"); #conexion a la base de datos

if(isset($_POST['registrar'])) {
  if(strlen($_POST['nombre']) >=1 && strlen($_POST['correo'])  >=1 && strlen($_POST['telefono'])  >=1 
    && strlen($_POST['password'])  >=1 ) {

      #Definir las variables
      $nombre = trim($_POST['nombre']);
      $correo = trim($_POST['correo']);
      $telefono = trim($_POST['telefono']);
      $password = trim($_POST['password']);

      #Hacer una consulta
      #Insertar datos en la base de datos en la tabla user
      $consulta = "INSERT INTO user(nombre, correo, telefono, password) 
      VALUES ('$nombre', '$correo', '$telefono', '$password')";

      mysqli_query($conexion, $consulta);

      mysqli_close($conexion);

      header('Location: ../views/user.php');
    }
}
?>