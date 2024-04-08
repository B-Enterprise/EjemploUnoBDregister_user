<!DOCTYPE html>
<html lang="es">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    

    <link rel="stylesheet" href="../css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Administración de registros</title>
</head>

<div class="container is-fluid">



<br>
<div class="col-xs-12">
		<h1>Lista de usuarios</h1>
    <br>
		<div>
      <!-- Llamamos a index.php para crear un nuevo usuario -->
			<a class="btn btn-success" href="../index.php">Nuevo usuario 
       </a>
		</div>
		<br>




           <br>


			</form>
        
        
 
      <table class="table table-striped table-dark" id="table_id">

                   
                         <thead>    
                         <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Password</th>
                        <th>Telefono</th>
                        <th>Fecha_Registro</th>
                        <th>Acciones</th>
         
                        </tr>
                        </thead>
                        <tbody>

				<?php
        #Otra forma de mostrar los datos en la tabla
        #Asignar la conexión
        $conexion = mysqli_connect("localhost", "root", "", "r_user");
        $SQL = "SELECT * FROM user";
        $dato = mysqli_query($conexion, $SQL);

        if ($dato -> num_rows > 0) {
          while ($fila = mysqli_fetch_array($dato)) {
        ?>
        
        <tr>
          <!-- Mostrar los datos -->

          <td><?php echo $fila['nombre']; ?></td>
          <td><?php echo $fila['correo']; ?></td>
          <td><?php echo $fila['password']; ?></td>
          <td><?php echo $fila['telefono']; ?></td>
          <td><?php echo $fila['fecha']; ?></td>

          <!-- Botones para las acciones -->
          <td>
            <a class="btn btn-warning" href="editar_user.php?id=<?php echo $fila['id']; ?>">Editar</a>
            <a class="btn btn-danger" href="eliminar_user.php?id=<?php echo $fila['id']; ?>">Eliminar</a>
          </td>
        </tr>

        <?php
          }
        } else {
          ?>
            <tr class="text-center">
              <td colspan="16">No existen registros</td>
            </tr>
          <?php
        }

        ?>

	</body>
  </table>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script src="../js/user.js"></script>


</html>