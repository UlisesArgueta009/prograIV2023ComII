<?php
//evaluar si se esta enviando algo
if(isset($_POST["enviar"])){
    echo "se esta enviando";
}


//declaracion de variables
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$operacion= strtolower($_POST["operacion"]) ;

//operaciones a realizar
$operaciones = array("suma","resta","multiplicacion","division");

//evaluar si la operacion existe en el array $operaciones
//in_array resive dos parametros y dice si operacion no existe en operaciones entonces :
if(!in_array($operacion, $operaciones)){
 echo "La operacion no es valida";
 exit();
}

//realizar la operacion
switch ($operacion){
    case "suma":
        $resultado = $num1 + $num2;
        break;
    case "resta":
        $resultado = $num1 - $num2;
        break;
    case "multiplicacion":
        $resultado = $num1 * $num2;
        break;
    case "division":
        if ($num2 == 0){
            echo "no se puede dividir por cero";
            exit();
        }
        $resultado = $num1 / $num2;
        break;
    
}   
echo "el resultado de la $operacion de $num1 y $num2 es $resultado";

?>