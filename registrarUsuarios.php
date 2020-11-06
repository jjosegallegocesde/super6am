<?php

    include("Basedatos.php");

    if (isset($_POST["botonEnvio"])){   
 
        //1. recibir los datos
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $descripcion=$_POST["descripcion"];
        $genero=$_POST["genero"];

        //2. crear una copia de la clase BD
        //crear un objeto de la clase bd
        $transaccion=new Basedatos();

        //3. crear una consulta SQL para agregar datos
        $consultaSQL="INSERT INTO usuarios(nombre, apellido, descripcion, genero) VALUES ('$nombre','$apellido','$descripcion','$genero')";

        //4. Utilizar el metodo agregarDatos()
        $transaccion->agregarDatos($consultaSQL);
               
    }

?>