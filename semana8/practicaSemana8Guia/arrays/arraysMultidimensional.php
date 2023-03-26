<?php
//matiz de matrices

$multiNumerico = array(
    array("Josed","Andrea","Carmen"),
    array(23,23,28),
    array("Masculino","Femenino","Femenino")
);

foreach($multiNumerico as $key=>$value){
    echo $key . " Tiene la edad de ";
    foreach($value as $datos){
        echo $datos."<br>";
    }
}

echo "<br>";
$cadena="Programacion computacional IV";
echo strtoupper($cadena);

echo "<br>";
echo sha1($cadena);

echo "<br>";
echo md5($cadena);

echo "<br>";
echo str_word_count($cadena);

echo "<br>";
echo ucfirst($cadena);

echo "<br>";
echo lcfirst($cadena);

?>