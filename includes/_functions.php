<?php
   
require_once ("_db.php");




if (isset($_POST['accion'])){ 
    switch ($_POST['accion']){
        //casos de registros
        case 'editar_registro':
            editar_registro();
            break; 

            case 'eliminar_registro';
            eliminar_registro();

            break;

            case 'acceso_user';
            acceso_user();
            break;


		}

	}

    function editar_registro() {
		$conexion=mysqli_connect("localhost","root","","r_user");
		extract($_POST);
		$consulta="UPDATE user SET nombre = '$nombre', correo = '$correo', telefono = '$telefono',
		password ='$password' WHERE id = '$id' ";

		mysqli_query($conexion, $consulta);


		header('Location: ../views/user.php');
    }

    function eliminar_registro() {
		$conexion=mysqli_connect("localhost","root","","r_user");
		extract($_POST);
        $id = $_POST['id'];
		$consulta = "DELETE FROM user WHERE id = $id ";

		mysqli_query($conexion, $consulta);


		header('Location: ../views/user.php');
    }
