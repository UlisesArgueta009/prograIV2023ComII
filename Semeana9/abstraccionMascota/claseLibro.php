<?php
class Libro{
    private $titulo;
    private $autor;
    private $fechaPublicacion;
    private $genero;

    public function __construct($titulo,$autor,$fechaPublicacion,$genero){
        $this->titulo = strtolower($titulo);
        $this->autor = strtolower($autor);
        $this->fechaPublicacion = strtolower($fechaPublicacion);
        $this->genero = strtolower($genero);
    }
    public function getInformation(){
        echo "El titulo es : <b>". ucwords($this->titulo) . "</b><br>";
        echo "El autor es: <b>". ucwords($this->autor) . "</b><br>";
        echo "La fecha de publicacion es: <b>" . ucwords($this->fechaPublicacion) . "</b><br>";
        echo "El genero del libro es: <b>" . ucwords($this-> genero) . "</b><br><br>";
    }
    //funciones get (enviar datos) y set (recibir datos).
   
    public function getTitulo(){
        return ucwords($this->titulo);
    }
    public function setTitulo($titulo){
        $this->titulo=strtolower($titulo);
    }
    public function getAutor(){
        return $this->autor;
    }
    public function setAutor($autor){
        $this->autor = strtolower($autor);
    }
    public function getFechaPublicacion(){
        return $this->getFechaPublicacion; 
    }
    public function setFechaPublicacion($fechaPublicacion){
        $this->fechaPublicacion = $fechaPublicacion;
    }
    public function getGenero(){
       return ucwords($this->genero);
    }
    public function setGenero($genero){
        $this->genero = strtolower($genero);
    }

    //FUNCIONES APLICABLES
    public function leer(){
        //codigo para leer
    }
    public function comprar(){
        //codigo para comprar
    }
    public function buscar($palabraClave){
        //codigo para buscar
    }
}
//crear un objeto

$libro1 = new Libro("Como no aprender ingles","daniel salas","19-enero-2016","SusPenso");
$libro1->getInformation();

$libro2=new Libro("ASI ES LA PUTA VIDA","JORDY WILD","19-SEPTIEMBRE-2023","DESARROLLO PERSONAL");
$libro2 -> getInformation();

?>