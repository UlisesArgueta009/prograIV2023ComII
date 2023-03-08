<?php
    //incluimos en archivo con las funciones
    include "functions.php";

    //obtener la accion a realizar
    $action =$_POST['action'];

    //obtener los valores del formulario
    $name=$_POST['name'];
    $lastname=$_POST['lastname'];
    $age=$_POST['age'];

   //evaluamos las acciones
   if($action == "guardar"){
    //guardar los datos en un arrray
    saveData($name, $lastname, $age);
    header('Location:index.php');
   }

    //Funcion para editar registro
    if($action == "editar"){
        $cod =$_POST['cod'];

        //actualizar datos
        updateData($cod, $name, $lastname, $age);

        //redirigir
        header('Location:index.php');

        //eliminar registro
        if ($action == "Eliminar"){
            $cod = $_POST['cod'];

            // llamado a la funcion eliminar
            deleteData($cod);

            header('Location: index.php');

        }
    }

    
?>