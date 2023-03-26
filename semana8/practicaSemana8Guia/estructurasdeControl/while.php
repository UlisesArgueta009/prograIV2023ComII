<?php
//WHILE
//Repite las instrucciones mientras la condicion se cumpla

$x=15;

while($x<=25){
    echo $x;
    echo " - while se repite<br/>";
    $x++; //incremento 
    
}


/* ejemplo 1 */

$i = 1;
while ($i <= 10) {
    echo " <br/><br/>- while se repite ";
    echo $i++;  /* el valor presentado sería
                   $i antes del incremento
                   (post-incremento) */
}

echo " <br/><br/>";
/* ejemplo 2 */

$i = 20;
while ($i <= 30):
    echo " <br/><br/>- while se repite ".$i;
    $i++;
endwhile;


?>