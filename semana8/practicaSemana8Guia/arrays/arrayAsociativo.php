<?php
//array asociativo
$multipleColor=array(
    "Jose"=> array("Azul","Rojo","Verde"),
    "Sofia" =>array("Violeta","Rosado")
);

echo "<h2>Jose</h2>";
echo $multipleColor["Jose"][0];
echo $multipleColor["Jose"][1];
echo $multipleColor["Jose"][2];
echo "<br>";
//el valor del array multicolor en posicion 0
echo "<h2>Sofia</h2>";
echo $multipleColor["Sofia"][0];

foreach($multipleColor as $nombre=>$values){
    echo "<h2>$nombre</h2> <b> le gustan los colores:</b><br><br>";
    foreach($values as $colores){
        echo $colores. "<br>";
    }
   
}
?>

