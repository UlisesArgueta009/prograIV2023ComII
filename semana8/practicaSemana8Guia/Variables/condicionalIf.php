<?php
//condicional if 
//f (Condición a evaluar) { Bloque que se ejecuta sólo si esa condición resulta
//ser verdadera }

// pasword
$password ="superagente86";

if ($password=="superagente86") {
    echo "<h1>Bienvenido</h1>".$password;}


//IF ELSE
echo "<br><br/><h1>If Else</h1>";
$clima = "lluvia";
if ($clima == "lluvia") {
    echo "Llevar paraguas";
    } 
else {
    echo "No llevar paraguas";}

//IF ELSE IF
echo "<br><br/><h1>Else if</h1>";

$a =23;
$b =43;

if ($a>$b){
    echo "a es mayor que b";
    echo $a > $b;
} else if($a==$b) {
    echo "a es igual que b";
    echo $a == $b;
} else{
    echo "b es mayor que a <br>";
    echo $b.' es mayor que '. $a;
}



        