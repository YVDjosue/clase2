<?php
interface iDispositivoElectronico{
    public function encender();
    public function apagar();
}

interface iCaracteristicas{ //Esta interfaz define las características de un dispositivo electrónico
    public function getColor();
    public function getMarca();
    public function getModelo();
}

class Televisor implements iDispositivoElectronico, iCaracteristicas{
    private $encendido = false;
    private $color;
    private $marca;
    private $modelo;

    public function __construct($color, $marca, $modelo){
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        echo "Se ha creado un televisor<br>";
    }
    public function getEncendido(){
        return $this->encendido;
    }
    public function setEncendido($encendido){
        $this->encendido = $encendido;
    }
    public function encender(){
       
        return true;
    }
    public function apagar(){
        if($this->encendido == true){
            echo "El televisor se ha apagado<br>";
            $this->setEncendido(false);
        }else{
            echo "El televisor ya se encontraba apagado<br>";
        }
    }
    public function getColor(){
        return $this->color;
    }
    public function getMarca(){
        return $this->marca;
    }
    public function getModelo(){
        return $this->modelo;
    }
}

$mitele = new Televisor("negro", "Samsung", "55P");
$mitele->encender();
echo $mitele->encender();
