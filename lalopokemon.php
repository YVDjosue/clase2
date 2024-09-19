<?php
require_once "class/Pokemon.php";
require_once "interface/iPokemon_interfaces";

class LaloPokemon extends Pokemon {
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

function trainingPokemon($Pokemondelalo){
    if ($Pokemondelalo->getataque() < 100){
        echo "El pokemon ".$Pokemondelalo->getNombre()." tiene un ataque bajo, se le debe entrenar para mejorar su nivel.<br><br>";
    }
}
function battlePokemon($Pokemondelalo, $Pokemonsalvaje){
    echo "".$Pokemondelalo->getNombre(). " esta luchando contra otro pokemon mas debil.<br><br>";
    if($Pokemondelalo->getataque() > $Pokemonsalvaje     ->getdefensa()){ 
    echo "".$Pokemondelalo->getNombre(). " gana experiencia.<br><br>";
    $Pokemondelalo->aumentaDefensa(1);
    $Pokemonsalvaje->aumentaHp(1);
    echo "".$Pokemondelalo->getNombre(). " ahora tiene ".$Pokemondelalo->getDefensa(). " puntos de defensa.<br><br>";
    echo "".$Pokemondelalo->getNombre(). " ahora tiene ".$Pokemondelalo->getHp(). " puntos de vida.<br><br>";
}
}
function pokemonEvolve($Pokemondelalo){
    echo "Evolucion de pokemon ".$Pokemondelalo->getNombre()."<br><br>";
    

}
$Pokemondelalo = new LaloPokemon("Caterpie", 10, 2, 15);
$Pokemonsalvaje = new LaloPokemon("Paras", 7, 1, 8);
pokemonEvolve($Pokemondelalo);
trainingPokemon($Pokemondelalo);
battlePokemon($Pokemondelalo,       $Pokemonsalvaje);




