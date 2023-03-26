<?php

    //evalua si se esta enviando la accion del boton
    //selection es el boton name = seleccion
    //isset conprueva si una variable esta definida y no es nula.
    if(isset($_POST['seleccion'])){
        //asignar a$idioma el valor del combobox
        $idioma= $_POST['idioma'];
        include $idioma.'.php';
    }else{
        include 'es.php';
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE; ?></title>
</head>
<body>
    <form method="post" action="">
        <select name="idioma" id="" class="">
            <option value="es">Espanish</option>
            <option value="en">Englis</option>
        </select>
        <input type="submit" name="seleccion" value="Cambiar">
    </form>
    <h1><?php echo HEADING_TITLE; ?> </h1>
    <h2><?php echo OVERVIEW_TITLE; ?></h2>
</body>
</html>