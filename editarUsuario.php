<?php 

    include("Basedatos.php");

    if (isset($_POST["botonEditar"])){ 
        
        //1. Recibir los datos a editar
        $nombre=$_POST["nombreEditar"];
        $descripcion=$_POST["descripcionEditar"];

        //2. Recibir el id del usuario a editar
        $id=$_GET["id"];
    
        //3. Crear un objeto de la clase BaseDatos
        $transaccion=new Basedatos();

        //4. Crear la consulta SQL para editar
        $consultaSQL="UPDATE usuarios SET nombre='$nombre',descripcion='$descripcion' WHERE idUsuario='$id'";

        //5. Llamar al metodo editarDatos()
        $transaccion->editarDatos($consultaSQL);

        

    
    }





?>