<?php
//evaluar el envio de datos.

if(isset($_POST["enviar"])){
    // echo "se esta enviando el archivo.";

}

//Variables, llenas con: name="num1" y name="num2"
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$operacion = strtolower($_POST["operaciones"]);


if ($operacion == "sumar") {
   $result = $num1 + $num2;
   echo "El resultado de la <b>$operacion</b> $num1 y $num2 es: " . $result;
}elseif($operacion=="restar"){
    $result = $num1 - $num2;
    echo "El resultado de la <b>$operacion</b> $num1 y $num2 es: " . $result;
} elseif($operacion == "multiplicar"){
    $result = $num1 * $num2;
    echo "El resultado de la <b>$operacion</b> $num1 y $num2 es: " . $result;
} elseif($operacion == "dividir"){
    $result = $num1 / $num2;
    echo "El resultado de la operacion <b>$operacion</b> $num1 y $num2 es: " . $result;
}else{
    echo "algo extranio ah ocurrido.";
}



?>