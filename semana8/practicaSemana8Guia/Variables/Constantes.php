<?php
//CONSTANTES EN PHP
//Se definen con la funcion define()

//en JS una constante se define const nameConst= "valor";

//definiendo constantes
define("PI",3.1415926);
define("BR","<br />");
define("LIBRO","PHP 6");

//imprimir valores con print()
print(PI); //no van entre comillas
print(BR);//van en MAYUSCULAS
print(LIBRO.BR);

echo BR.PI.BR;
echo LIBRO.BR;