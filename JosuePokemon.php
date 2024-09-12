<?php
require_once "class/Pokemon.php";
require_once "interface/iPokemon_interfaces";

class JosuePokemon extends Pokemon implements iPokemon{
    public function __construct($nombre, $ataque, $defensa, $hp){
        parent::__construct($nombre, $ataque, $defensa, $hp);
    }

   //Metodos de la interface iPokemon, USEN SU CREATIVIDAD
   public function gritoBatalla():void{
    echo "GAAAAAA<br>";
   }

   public function getGolpeCritico():float{
    return $this->ataque * 2;
   }
   
   public function aumentaDefensa(int $incremento):void{
    $this->defensa += $incremento;
   }
}

$pikachu = new JosuePokemon("Pikachu", 100, 50, 300);