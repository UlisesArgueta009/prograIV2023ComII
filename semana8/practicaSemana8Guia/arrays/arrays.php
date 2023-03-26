<?php
//ARRAYS PHP
$nombres = array("Jose","Sofia","Andrea","Alberto",10);

//accediendo directamente al indice
echo $nombres[0];
echo $nombres[1];
echo $nombres[2];

//recorrer array con bucle
foreach($nombres as $key){
    echo $key."<br>";
}

for ($i=0;$i<$nombres[4];$i++){
    echo $nombres[$i]."<br>";
}
?>