<?php
class Pokemon{
    private $nombre;
    private $ataque;
    private $defensa;
    private $hp;

    public function __construct($nombre, $ataque, $defensa, $hp){
        $this->nombre = $nombre;
        $this->ataque = $ataque;
        $this->defensa = $defensa;
        $this->hp = $hp;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getAtaque(){
        return $this->ataque;
    }

    public function getDefensa(){
        return $this->defensa;
    }

    public function getHP(){
        return $this->hp;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setAtaque($ataque){
        $this->ataque = $ataque;
    }

    public function setDefensa($defensa){
        $this->defensa = $defensa;
    }

    public function setHP($hp){
        $this->hp = $hp;
    }
}