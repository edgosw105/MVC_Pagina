<?php

include('../connection/metodos.php'); 
$documento = $_POST["documento"]; 
$nombres = $_POST["nombres"]; 
$apellidos = $_POST["apellidos"]; 
$pass = $_POST["pass"]; 

$imagen = $_FILES['foto']['tmp_name'];
$foto = "../uploads/" . basename($_FILES["foto"]["name"]);
move_uploaded_file($imagen, $foto);

//Consulto para saber si ya existe
$sql_consulta = "select * from usuario where documento = '$documento'"; 

$resultado_consulta = consultar($sql_consulta); 
if(mysqli_fetch_array($resultado_consulta)){
    echo "1"; 
    //Header("Location: ../vistas/insertarDato.php?Error=1"); 
}else{
    $sql = "insert into usuario values ('$documento', '$nombres', '$apellidos', '$pass', '$foto');";
    
    $resultado = operacion($sql); 

    if ($resultado) {
        //Header("Location: ../vistas/insertarDato.php?Resultado=1"); 
        echo "2"; 
    }else{
        echo "Error al registrar al usuario";             
    }
}

?>