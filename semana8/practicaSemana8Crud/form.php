<?php
    include "functions.php";
    //verificamos si va a editar o agregar nuevo registro
    if(isset($_GET['cod'])){
        $cod=$_GET['cod'];
        $data=getData();
        $record=$data[$cod];
        $action = "editar";
    }else{
        $record = array(
            'name' => '',
            'lastname' => '',
            'age' => ''
        );
        $action="guardar";
    }
?>//detente aqui

<form action= "crud.php" method ="post">
    <input type="text" name="action" value="<?php echo  $action; ?>">
    <?php if ($action =="editar"){ ?>
        <input type="text" name="code" value ="<?php echo $cod; ?> " /> 
    <?php
    }
    ?>
    Nombre
    <input type="text" name="name" id="name" value="<?php echo $record['name']; ?>" >
    Appellido
    <input type="text" name="lastname" id="lastname" value="<?php echo $record['lastname']; ?>" >
    Edad
    <input type="number" name="age" id="age" value="<?php echo $record['age']; ?>">
    <button type="submit">Guerdar</button>
</form>