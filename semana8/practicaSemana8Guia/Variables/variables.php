<?php

//creacion de variables con $ y agregando su respectivo valor.
$var="valor";

//variables de tipo numerico
$cantidad = 5;
$precio = 3;
$importe = $cantidad * $precio;

echo "la suma de " . $cantidad . " + ". $precio ."=  ";
echo "<br>"; 
echo "el importe es: " . $importe;

//opcionpara iniciar pvariables
$lugar1 = "Buenos aires";
$_lugar_2="Mexico";

echo "<br>".$lugar1."<br>".$_lugar_2."<br><br>";

//interpretacion de variable dentro de comillas.
$nombre='Juan';
$apellido='Perez';

$comillasDobles="Texto entre comillas dobles, puede contener'comillas simples' dentro sin problemas";
$comillasSimples='Texto entre comillas simples, puede contener"comillas dobles" pero sin variables dentro, porque usa comillas simples para delimitar el inicio y fin del bloque';

$escapeDoble="texto con\"comillas\"dobles escapadas";
$escapeSensillo='Texto con\'comillas\'simples escapadas';
$variablesDobles="texto con variables como $nombre y $apellido intercaladas entre comillas dobles, que reemplazaran por su valor";

echo $variablesDobles;





