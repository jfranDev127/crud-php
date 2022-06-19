<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"> <!-- bootstrap -->
    <link rel="stylesheet" href="css/estilos.css"> <!-- custom css -->
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/jquery-3.6.0.js">
</head>
<body>
    <h1>Iniciar Sesion</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <form action="conexion.php" method="post">
                    <div class="form-group">
                        <br>
                        <input type="email" name="usuario" class="form-control" id="usuario" placeholder="Ingrese su Correo">
                    </div>
                    <div class="form-group">
                        <br>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
                </form>
            </div>
        </div>
    <script src="js/app.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>