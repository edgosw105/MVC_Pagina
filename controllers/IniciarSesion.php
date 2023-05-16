<?php

    include('../connection/metodos.php'); 
    $documento = $_POST["documento"]; 
    $pass = $_POST["pass"]; 

    $sql_consulta = "select nombres from usuario where documento = '$documento' and pass = '$pass'"; 
    $resultado = consultar($sql_consulta); 

    if($fila = mysqli_fetch_array($resultado)){
        session_start(); 
        $_SESSION["documento"] = $documento; 
        echo $fila['nombres']; 
        //Header("Location: ../vistas/insertarDato.php?Error=1"); 
    }else{
        echo "error"; 
    }
?>