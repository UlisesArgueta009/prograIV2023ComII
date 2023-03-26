<?php
//SWITCH o selectiva selecciona una o varias caminos.


$dia = "";
$texto;

switch ($dia){
    case "Lunes":
    $texto="Feliz dia Lunes";
    break;

    case "Martes":
        $texto = "Feliz dia Martes ";
        break;

    case "Miercoles":
        $texto = "Feliz dia Miercoles";
        break;
    case "Jueves":
        $texto = "Feliz dia Jueves";
        break;
    case "Viernes":
        $texto = "Feliz dia Viernes";
         break;
    case "Sabado    ":
        $texto = "Feliz dia Sabado";
        break;
    
    Case "Domiengo";
        $texto = "Feliz dia Domingo";
        break;

    default:
    $texto = "nose encontro nada.";
}

//impresion del saludo del dia.
echo $texto;

//VALOR POR OMICION
// tener previsto una opcion diferente a las opciones de la variable en evaluacion
//si de los 7 dias de las semana, al $dia = "otra Cosa
