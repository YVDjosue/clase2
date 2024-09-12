<?php
class Persona {
    public $nombre;
    public $edad;
    public $despierto;

    public function __construct($nombre) {
        $this->nombre = $nombre;
        $this->edad = 0;
        $this->despierto = false;
    }

    public function despertar() {
        $this->despierto = true;
    }

    public function estoyDespierto() {
        if($this->despierto){
            echo "Estoy despierto.";
        }else{
            echo "Estoy dormido.";
        }
        echo "<br>";
    }

    public function mostrarInfo() {
        echo "Nombre: $this->nombre<br>";
        echo "Edad: $this->edad<br>";
        $this->estoyDespierto();
    }

    public function envejecer() {
        $this->edad = $this->edad + 10;
    }
}

$persona1 = new Persona("Juan");
$persona2 = new Persona("Josue");
$personas = array($persona1, $persona2);

$personas[0]->mostrarInfo();
echo "<br>";
$personas[1]->mostrarInfo();

echo "<br><br><br><br>";

class Coffee {
    public $price;
    public $filled; //true = esta llena, false = esta vacia

    public function __construct($price) {
        $this->price = $price;
        $this->filled = true;
    }

    //rellena la taza de café
    public function reFill() {
        $this->filled = true;
        echo "La taza de café se ha rellenado.";
    }

    //evalúa si la taza esta vacía
    public function isEmpty() {
        return !$this->filled;
    }

    //bebe el café (vacía la taza)
    public function drink(){
        echo "Estoy bebiendo el café.";
        echo "<br>";
        $this->filled = false;
    }

    //muestra la información de la taza
    public function showInfo() {
        echo "Precio: $this->price<br>";
        if($this->filled){
            echo "Esta llena.";
        }else{
            echo "Esta vacía.";
        }
        echo "<br>";
    }
}


$cafe = new Coffee(2.5);
$cafe->showInfo();
if($cafe->isEmpty()){
    $cafe->reFill();
}else{
    $cafe->drink();
}
$cafe->showInfo();

echo "<br><br><br><br>";

class Humano{
    private $nombre;
    private $corazon;    //"sano", "arritmia", "soplo", "trombo"
    private $cerebro;    //"sano", "tumor", "sangrado"

    public function __construct($nombre){
        $this->nombre = $nombre;
        $this->corazon = "sano";
        $this->cerebro = "sano";
    }

    public function mostrarInfo(){
        echo "Nombre: $this->nombre<br>";
        echo "Corazón: $this->corazon<br>";
        echo "Cerebro: $this->cerebro<br>";
    }

    public function enfermar(){
        $this->corazon = "arritmia";
        $this->cerebro = "tumor";
    }

    public function curar(){
        $this->corazon = "sano";
        $this->cerebro = "sano";
    }

    public function resonanciaMagnetica(){
        if($this->corazon == "arritmia" || $this->cerebro == "tumor"){
            echo "Estoy enfermo.";
        }else{
            echo "Estoy bien.";
        }
        echo "<br>";
    }

    public function tomografia(){
        return $this->cerebro;
    }

}

$josue = new Humano("Josue");
echo $josue->tomografia();