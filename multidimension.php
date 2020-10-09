<?php 

//Arreglo de 1 dimension
/*$precios=array("precio1"=>1600,"precio2"=>4500,"precio3"=>1000);
$productos=array("arroz","salchichas","sal");
$marcas=array("caribe","zenu","Refisal");
$cantidades=array(2,3,1);*/


//arreglos multidimensionales
$productos=array(
    "producto1"=>array("nombre"=>"arroz",1600,"caribe"),
    "producto2"=>array("salchichas",4500,"zenu"),
    "producto3"=>array("sal",1000,"refisal")
);
print_r($productos);

echo("<br>");
echo("<br>");
foreach($productos as $producto){

    echo($producto["nombre"].' - '.$producto[1].' - '.$producto[2]);
    echo("<br>");

}



?>