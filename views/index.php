<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="../js/funciones.js"></script>
</head>
<body>
    
  <div class="container">
    <h2>Iniciar Sesión</h2>

      <div class="form-group">
        <label for="username">Usuario:</label>
        <input type="text" class="form-control" id="documento" placeholder="Ingrese su usuario">
      </div>
      <div class="form-group">
        <label for="password">Contraseña:</label>
        <input type="password" class="form-control" id="pass" placeholder="Ingrese su contraseña">
      </div>
      <button onclick="IniciarSesion()" class="btn btn-primary">Iniciar Sesión</button>
      <a href="registro.php" class="btn btn-secondary">Quiero Registrarme...</a>

 
  </div>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>