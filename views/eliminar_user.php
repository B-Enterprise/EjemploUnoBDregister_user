<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar usuarios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                <div class="alert alert-danger text-center">
                    <h3>¿Estas seguro de eliminar este usuario?</h3>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <form action="../includes/_functions.php" method="POST">
                            <input type="hidden" name="accion" value="eliminar_registro"> <!-- Acción -->
                            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"> <!-- GET sirve para traer el id del usuario -->
                            <input type="submit" value="Eliminar" class="btn btn-danger btn-block">
                            <a href="user.php" class="btn btn-success">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>