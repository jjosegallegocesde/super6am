<?php   

//Arreglo indexado (que los cajones o elementos del array se identifican con numeros enteros iniciando con 0)
$productos=array("atun","arroz","arepas");
print_r($productos);
echo("<br>");
echo($productos[1]);

//Arreglos asociativos (Poner nombres propios a los cajones o elementos del array)
$productosAsociativos=array("producto1"=>"atun","producto2"=>"arroz","producto3"=>"arepas");
echo("<br>");
echo("<br>");
print_r($productosAsociativos);
echo("<br>");
echo($productosAsociativos["producto2"]);

//Estructura de control FOR
echo("<br>");
echo("<br>");
for($i=0; $i<count($productos); $i++){
    echo($productos[$i]);
    echo("<br>");
}

//Estructura de control FOREACH
echo("<br>");
echo("<br>");
foreach($productosAsociativos as $clave=>$valor){

    echo($valor);
    echo("<br>");

}



?>