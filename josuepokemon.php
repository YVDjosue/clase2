<?php
require_once "class/Pokemon.php";
require_once "interface/iPokemon_interfaces";

class JosuePokemon extends Pokemon implements iPokemon{
    public function __construct($nombre, $ataque, $defensa, $hp){
        parent::__construct($nombre, $ataque, $defensa, $hp);
    }

   //Metodos de la interface iPokemon, USEN SU CREATIVIDAD

   public function getGolpeCritico():float{
    return $this->ataque * 2;
   }
   
   public function aumentaDefensa(int $incremento):void{
    $this->defensa += $incremento;
   }

   public function reduceDefensa(int $decremento):void{
    $this->defensa -= $decremento;
   }

   public function aumentaHp(int $incremento):void{
    $this->hp += $incremento;
   }

   public function reduceHp(int $decremento):void{
    $this->hp -= $decremento;
   }
}

$pikachu = new JosuePokemon("Pikachu", 100, 50, 300);