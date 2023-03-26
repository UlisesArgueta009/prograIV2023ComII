<?php
 class Mascota {
    //al ponerlos en privado no tengo acceso a los atributos directamente
    //para luego poder acceder a ellos mediante los metodos.
    public $nombre;
    private $edad;
    private $genero;
    private $tipoAnimal;

    public function __cosntruct($nombre,$edad,$genero,$tipoAnimal){
        $this->nombre = strtolower($nombre);
        $this->edad= $edad;
        $this->genero=strtolower($genero);
        $this->tipoAnimal = strtolower($tipoAnimal);
    }
    //Mostrar toda la informacion
    public function getInformation(){
        echo $this->nombre . "<br>";
        echo $this-> edad. "<br>";
        echo $this->genero. "<br>";
        echo $this->tipoAnimal. "<br>". "<br>";
    }
    //funciones set para ingresar por separado nombre,edad,genero, tipodeanimal.
    //nombre
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    //edad
    public function setEdad($edad){
        $this->edad=$edad;
    }
    //genero
    public function setGenero($genero){
        $this->genero = strtolower($genero);
    }
    //animal
    public function setTipoAnimal($tipoAnimal){
        $this->tipoAnimal = strtolower($tipoAnimal);
    }

    //METODOS MOSTRAR GET
    public function getNombre(){
        return ucwords($this->nombre);
    }
    public function getEdad(){
       return $this->edad;
    }
    public function getGenero(){
        return ucwords($this->genero);
    }
    public function getTipoAnimal($tipoAnimal){
        return ucwords($this->tipoAnimal);
    }
    
 }


$animal1 = new Mascota();
$animal1-> __cosntruct("Rosaria", 9,"Femenino","Gato");


//ver el nombre mediante el atrubuto $nombre
echo "Nombre mostrado accediendo a el atributo nombre: <b>".$animal1->nombre."<b><br>";
//ver el nombre mediante el metrodo getNombre()
echo "Nombre mostrado con el metodo: <b>".$animal1->getNombre()."</b><br>";

print_r($animal1);

?>