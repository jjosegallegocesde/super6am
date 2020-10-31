<?php

    include("Basedatos.php");

    if (isset($_POST["botonEnvio"])){   
 
        //recibir los datos
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $descripcion=$_POST["descripcion"];
        $genero=$_POST["genero"];

        //crear una copia de la clase BD
        //crear un objeto de la clase bd
        $transaccion=new Basedatos();

        $transaccion->conectarBD();
               
    }

?>