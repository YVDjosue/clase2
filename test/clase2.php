<?php	
    class Persona {
    private $nombre;
    private $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setEdad($edad) {
        if ($edad > 0) {
            $this->edad = $edad;
        }
    }
}


class Empleado extends Persona {
    private $salario;

    public function __construct($nombre, $edad, $salario) {
        parent::__construct($nombre, $edad);
        $this->salario = $salario;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setSalario($salario) {
        if ($salario > 0) {
            $this->salario = $salario;
        }
    }
}


//MODIFICADORES DE ACCESO
//Los modificadores de acceso se utilizan para controlar el acceso a los métodos y propiedades de una clase.
//Los modificadores de acceso son: public, protected, private.

//public: el acceso es total, es decir, el método o propiedad es accesible desde cualquier parte del programa.
//protected: el acceso es limitado a la clase que la hereda o a las clases que hereden de ella.
//private: el acceso es limitado a la clase en la que se declara.

interface iFuncionesBasicas {
    public function comer($alimento);
    public function dormir();
}

abstract class Animal {
    protected $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    abstract public function hacerSonido();
    abstract public function correr();
    public function comer($alimento){
        echo "No se comió nada<br>";
    }
}



class Perro extends Animal implements iFuncionesBasicas {
    public function hacerSonido() {
        return "Guau";
    }
    public function correr() {
        echo "Corriendo a 50km/h<br>";
    }
    public function comer($alimento) {
        echo "Comiendo: $alimento<br>";
    }
    public function dormir() {
        echo "Zzz<br>";
    }
}

class Gato extends Animal {
    public function hacerSonido() {
        return "Miau";
    }
    public function correr() {
        echo "Corriendo a 42km/h<br>";
    }
    public function comer($alimento) {
        echo "Comiendo: $alimento<br>";
    }
}

function hacerSonidoAnimal(Animal $animal) {
    echo $animal->hacerSonido();
}

$perro = new Perro("Firulais");
$perro->comer("carne"); // Comiendo: carne<br>
$gato = new Gato("Michi");
$gato->comer("pescado");

hacerSonidoAnimal($perro); // Salida: Guau
echo "<br>";
hacerSonidoAnimal($gato);  // Salida: Miau



/*
$gato = new Gato("Michi");
echo $gato->hacerSonido(); // Miau
$gato->correr(); // Corriendo a 42km/h
echo "<br>";
$perro = new Perro("Firulais");
echo $perro->hacerSonido(); // Guau
$perro->correr(); // Corriendo a 50km/h
*/