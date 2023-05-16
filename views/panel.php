<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/estilo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="../js/funciones.js"></script>

</head>
<body onload="CargarDatos()">
    <div class="container"> 
        <h2 class="text-center">DATOS</h2>
        <div class="image-container">
        <img id="imgPerfil" src="" alt="Imagen de 300x300px">
        </div>
        <p id="txtCertificado"></p>
        <div class="d-flex justify-content-center">
            <button onclick="CerrarSesion()" class="btn btn-primary">CERRAR SESIÓN</button>
        </div>
    </div>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>