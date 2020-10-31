<?php 
include('Sopa.php');

//usar el molde INSTANCIAR LA CLASE (CREAR OBJETO)
//UN OBJETO ES UNA VARIABLE
$sancocho= new Sopa();

//acceder a un atributo de la clase(usando el objeto)
$sancocho->cantidadAgua="5LITROS";
echo($sancocho->cantidadAgua);

//acceder a un metodo de la clase(usando el objeto)
$sancocho->prepararSopa();




?>