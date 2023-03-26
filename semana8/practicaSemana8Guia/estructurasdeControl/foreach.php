<?php 
//FOREACH funciona sobre arrays y objetos.
//Recorrer array de manera facil.
//uso en arrays escalables y arrays asociativos
$valores= array(5,9,8,"Hola","Andrea");
foreach($valores as $key):
    echo $key.  "<br/>";
endforeach;
var_dump($valores);



echo '<br><br> <h1>ejemplo dos</h1>';
$array = array(1, 2, 3, 4);
foreach ($array as &$valor) {
    $valor = $valor * 2;
    echo $valor.'<br>';
}
// $array ahora es array(2, 4, 6, 8)
unset($valor); // rompe la referencia con el último elemento
var_dump($array);
echo "<br/>";
print_r($array);


/* Ejemplo 1 de foreach: sólo el valor */
echo '<br><br> <h1>ejemplo tres</h1>';
$a = array(1, 2, 3, 17);

foreach ($a as $v) {
    echo "Valor actual de \$a: $v.<br/>";
}

$i = 0; /* sólo para efectos ilustrativos */

foreach ($a as $v) {
    echo "\$a[$i] => $v.<br>";
    $i++;
}
echo $a[3]." " . $i;


/* Ejemplo 3 de foreach: clave y valor */
echo '<br><br> <h1>ejemplo cuatro</h1>';
$a = array(
    "uno" => 1,
    "dos" => 2,
    "tres" => 3,
    "diecisiete" => 17
);

foreach ($a as $k => $v) {
    echo "\$a[$k] => $v.<br>";
}

/* Ejemplo 4 de foreach: arrays multidimensionales */
echo '<br><br> <h1> arrays multidimensionales</h1>';
$a = array();
$a[0][0] = "a";
$a[0][1] = "b";
$a[1][0] = "y";
$a[1][1] = "z";

foreach ($a as $v1) {
    foreach ($v1 as $v2) {
        echo "$v2<br>";
    }
}
?>