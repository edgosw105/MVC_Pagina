<?php
    include('../connection/metodos.php'); 
    session_start(); 
    
    $documento = $_SESSION["documento"]; 

    $sql = "select * from usuario where documento = '$documento'"; 
    $resultado = consultar($sql); 

    if($fila = mysqli_fetch_array($resultado)){
        echo json_encode($fila); 
        //Header("Location: ../vistas/insertarDato.php?Error=1"); 
    }else{
        echo "error"; 
    }

    
?>