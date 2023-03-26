<?php
//SICLO FOR
//Utilizado para leer un array, sustituido por forech que es mas simple.
for ($i=0; $i < 10; $i++) { 
    print ("El ciclo actual es: " . $i . "<br>");
}

echo '<br><br> <h1>ejemplo dos</h1>';

/* ejemplo 2 */

for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo 'el ciclo actuar con break es : '. $i. "<br>";
}

/* ejemplo 3 */

echo '<br><br> <h1>ejemplo tres</h1>';

$i = 1;
for (; ; ) {
    if ($i > 10) {
        break;
    }
   echo 'el ciclo actuar con corchetes vacios es : '. $i. ' evaluacion vacia : for (; ; ) { }'.  "<br>"  ;
    $i++;
}
?>