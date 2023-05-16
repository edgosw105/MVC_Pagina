function RegistrarDatos(){
    let documento = document.getElementById('documento'); 
    let nombres = document.getElementById('nombres'); 
    let apellidos = document.getElementById('apellidos');
    let pass = document.getElementById('pass');
    let foto = document.getElementById('foto'); 
    let archivo = foto.files[0]; 

    const datos = new FormData();
    datos.append("documento", documento.value); 
    datos.append("nombres", nombres.value); 
    datos.append("apellidos", apellidos.value); 
    datos.append("pass", pass.value); 
    datos.append("foto", archivo); 

    fetch('../controllers/RegistrarUsuario.php', {
        method: "POST",
        body: datos
    })
  .then(response => response.text())
  .then(data => {
    switch (data) {
        case "1":
            alert('El usuario ya está registrado con el numero de documento!'); 
            break;
        case "2": 
            alert('usuario registrado con éxito!'); 
            location.href='../views/index.php'; 
            break; 
        default:
            alert('Ha ocurrido un error'); 
            break;
    }
  })
  .catch(error => {
    console.error(error);
  });
}

function IniciarSesion(){
    let documento = document.getElementById('documento'); 
    let pass = document.getElementById('pass'); 

    const datos = new FormData(); 
    datos.append("documento", documento.value); 
    datos.append("pass", pass.value); 
    fetch('../controllers/IniciarSesion.php', {
        method: "POST",
        body: datos
    })
  .then(response => response.text())
  .then(data => {
    switch (data) {
        case "error":
            alert('Datos incorrectos!'); 
            break;
        default:
            alert('Bienvenido ' + data); 
            location.href = "../views/panel.php"; 
            break;
    }
  })
  .catch(error => {
    console.error(error);
  });
}

function CargarDatos(){
    let txtCertificado = document.getElementById('txtCertificado'); 
    let imgPerfil = document.getElementById('imgPerfil'); 
    let texto = ""; 
    fetch('../controllers/ConsultarDatos.php')
  .then(response => response.json())
  .then(data => {
    switch (data) {
        case "error":
            alert('Datos incorrectos!'); 
            break;
        default:
            console.log(JSON.stringify(data.nombres)); 
            texto = "Hola, la página del profe edgar certifica que " + data.nombres + " " + data.apellidos +
            " identificado con documento N° " + data.documento + " se ha registrado exitosamente en el sistema. Gracias"; 
            txtCertificado.innerText = texto; 
            imgPerfil.src = data.foto; 
            //location.href = "../views/panel.php"; 
            break;
    }
  })
  .catch(error => {
    console.error(error);
  });
}

function CerrarSesion(){
    fetch('../controllers/CerrarSesion.php')
  .then(response => response.text())
  .then(data => {
    switch (data) {
        case "ok":
            location.href = "../views/index.php"
            break;
        default:
            alert(data); 
            break;
    }
  })
}