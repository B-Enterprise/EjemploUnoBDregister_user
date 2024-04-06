<?php 

# Asignar conexion a la base de datos
$id = $_GET['id']; #Obtener el id del usuario
$conexion = mysqli_connect("localhost", "root", "", "r_user"); #conexion a la base de datos
$consulta = "SELECT * FROM user WHERE id = '$id'"; #Hacer una consulta
$resultado = mysqli_query($conexion, $consulta); #Ejecutar consulta
$usuario = mysqli_fetch_assoc($resultado); #Obtener los datos del usuario

?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>

    <link rel="stylesheet" href="../css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/custom.css">
</head>
<body id="page-top">

    <form action="../includes/_functions.php" method="POST">
        <div id="login">
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <br><br>
                            <!-- Estructura del formulario para editar los datos del usuario -->
                            <h3 class="text-center">Editar usuario</h3>
                            <div class="form-group">
                                <label for="nombre" class="form-label">Nombre:</label>
                                <input type="text"  id="nombre" name="nombre" class="form-control" value="<?php echo $usuario['nombre'];?>"required>
                            </div>
                            <div class="form-group">
                                <label for="username">Correo:</label><br>
                                <input type="email" name="correo" id="correo" class="form-control" value="<?php echo $usuario['correo']; ?>"required>
                            </div>
                            <div class="form-group">
                                  <label for="telefono" class="form-label">Telefono:</label>
                                  <input type="text"  id="telefono" name="telefono" class="form-control" value="<?php echo $usuario['telefono']; ?>"required>                 
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña:</label><br> 
                                <input type="password" name="password" id="password" class="form-control" value="<?php echo $usuario['password']; ?>"required>
                                <input type="hidden" name="action" value="editar_registro">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                            </div>
                            <br>

                            <div class="mb-3">
                                <button class="btn btn-success" type="submit">Editar</button>
                                <a href="#" class="btn btn-danger">Cancelar</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    
</body>
</html>