<?php
    function conectarDB() : mysqli {
        $db = mysqli_connect("localhost", "root","123456789","inmobiliaria_crud");
        
        if(!$db){
            echo "Hubo un error";
            exit;
        }
        //echo("Conexion exitosa");
        return $db; 
    }
?>