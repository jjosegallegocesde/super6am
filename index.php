<?php   



$producto1='Jamon';
$producto2='arroz';
$producto3='arepas';
$producto4='chocolate';
$producto5='huevos';
$producto6='café';
$producto7='quesito';
$producto8='papita';
$producto9='manzanas';
$producto10='frijoles';


$precio1='22000';
$precio2='5000';
$precio3='6000';
$precio4='2500';
$precio5='11000';
$precio6='7500';
$precio7='8000';
$precio8='5000';
$precio9='8000';
$precio10='7000';


$total=$precio1+$precio2+$precio3+$precio4+$precio5+$precio6+$precio7+$precio8+$precio9+$precio10;


$producto9='medellin';
switch($producto9){

    case 'manzanas':
        echo('Tenes descuento del 10%');
    break;

    case 'bananos':
        echo('Tenes descuento del 5%');
    break;

    default:
        echo('No hay descuento');
    break;
}


/*if($total<=80000){
    echo('Muchas gracias por su compra');

}else{
    echo('Mijo tiene que ir por mas platica');
}*/




//echo('El total es: '.$total);


?>