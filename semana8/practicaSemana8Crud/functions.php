<?php
    //archivo
    $file="datos.txt";
    define('FILE',"datos.txt");

    //funcion para listar datos
    function getData(){
        //si el archov no exite lo creamos 
    
        if (!file_exists(FILE))
        {
            file_put_contents(FILE, '');
        }

        //obtener los datos del archivo
        $data=file_get_contents(FILE);
        $data = json_decode($data,true);

        //si los datos no son array lo innicializamos
        if (!is_array($data)) {
            $data=[];
        }

        return $data;

    }
    //funcion para guardar datos
    function saveData($name, $lastname, $age){
        //obtener los datos actuale del archivo
        $data = getData();

        //crear nuevo registro
        $record = [
            "name"=> $name,
            "lastname" => $lastname,
            "age " => $age
        ];

        //agregar el nuevo registro al array de datos
        $data[] =$record;

        //convertir el array a formato json y los guardamos
        $data =json_encode($data);
        file_put_contents(FILE, $data);
    }
    
   //FUNCION PARA MODIFICAR REGISTRO
   function updateData($cod, $name, $lastname, $age){
       //obtenemos los datos actuales del archivo
        $data= getData();

        //actualizamos el registro correspondiente
        $data[$cod]['name'] = $name;
        $data[$cod]['lastname'] = $lastname;
        $data[$cod]['age'] = $age;

        //convertir a formato json
        $data = json_decode($data);
        file_put_contents(FILE, $data);
   }

   //funcion para eliminar
   function deleteData($cod){
       //obtener los datos
       $data = getData();

       //eliminar registro
       unset($data[$cod]);

       //reindexar el array
       $data =array_values($data);

       //convertir el array a formao JSON y guardar arhivo
       $data = json_encode($data);
       file_put_contents(FILE, $data);
   }

?>