<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="../js/funciones.js"></script>
</head>
<body>
<div class="container">
    <h2>Registro de Usuario</h2>
    
      <div class="form-group">
        <label for="document">Documento:</label>
        <input type="number" class="form-control" id="documento" required placeholder="Ingrese su documento">
      </div>
      <div class="form-group">
        <label for="firstName">Nombres:</label>
        <input type="text" class="form-control" id="nombres" required placeholder="Ingrese sus nombres">
      </div>
      <div class="form-group">
        <label for="lastName">Apellidos:</label>
        <input type="text" class="form-control" id="apellidos" required placeholder="Ingrese sus apellidos">
      </div>
      <div class="form-group">
        <label for="password">Contraseña:</label>
        <input type="password" class="form-control" required id="pass" placeholder="Ingrese su contraseña">
      </div>
      <div class="form-group">
        <label for="photo">Subir fotografía:</label>
        <input type="file" class="form-control-file" required id="foto">
      </div>
      <button onclick="RegistrarDatos()" class="btn btn-primary">Registrarse</button>
    
  </div>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>