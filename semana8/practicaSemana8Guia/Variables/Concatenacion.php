<?php
//CONCATENACION EN PHP

//Entre texto y variable
$nombre='Pepe';
$concatenacion ='<p id"saludo"> Hola '.$nombre.'</p>';

echo $concatenacion;
echo "<br>";

//Entre dos variables
$nombre='Juan ';
$_apellido='Perez';
//agarra la variable nombre mas cercana, en este caso JUAN y no Pepe.
$_concatenacion= '<p>Su nombre y apellido es '.$nombre. $_apellido.'</p>';

echo $_concatenacion;