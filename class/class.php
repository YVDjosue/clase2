<?php

class Pokemon {
    private $name;
    private $type;
    private $health;
    private $attack;
    private $defense;
    private $critical_hit;
    private $critical_hit_damage;

    public function __construct($name, $type, $health, $attack, $defense, $critical_hit, $critical_hit_damage) {
        $this->name = $name;                                //pokemon name
        $this->type = $type;                                //pokemon type
        $this->health = $health;                            //pokemon health
        $this->attack = $attack;                            //pokemon attack
        $this->defense = $defense;                          //pokemon defense
        $this->critical_hit = $critical_hit;                //pokemon critical hit rate
        $this->critical_hit_damage = $critical_hit_damage;  //pokemon critical hit damage
    }

    //getters and setters
    public function getName() {
        return $this->name;
    }

    public function getType() {
        return $this->type;
    }

    public function getHealth() {
        return $this->health;
    }

    public function getAttack() {
        return $this->attack;
    }

    public function getDefense() {
        return $this->defense;
    }

    public function getCriticalHit() {
        return $this->critical_hit;
    }

    public function getCriticalHitDamage() {
        return $this->critical_hit_damage;
    }

    public function setHealth($health) {
        $this->health = $health;
    }

    public function setAttack($attack) {
        $this->attack = $attack;
    }

    public function setDefense($defense) {
        $this->defense = $defense;
    }

    public function setCriticalHit($critical_hit) {
        $this->critical_hit = $critical_hit;
    }

    public function setCriticalHitDamage($critical_hit_damage) {
        $this->critical_hit_damage = $critical_hit_damage;
    }

    
}

function battle($pokemon1, $pokemon2) {
    echo "Batalla entre ".$pokemon1->getName()." y ".$pokemon2->getName()."<br>";

    echo "Tipo: ".$pokemon1->getType()." vs ".$pokemon2->getType()."<br>";
    echo "Salud: ".$pokemon1->getHealth()." vs ".$pokemon2->getHealth()."<br>";
    echo "Ataque: ".$pokemon1->getAttack()." vs ".$pokemon2->getAttack()."<br>";
    echo "<br>";

    while($pokemon1->getHealth() > 0 && $pokemon2->getHealth() > 0){
        $damage1 = $pokemon1->getAttack();
        $damage2 = $pokemon2->getAttack();
        $pokemon1->setHealth($pokemon1->getHealth() - $damage2);
        $pokemon2->setHealth($pokemon2->getHealth() - $damage1);

        echo $pokemon1->getName()." ataca a ".$pokemon2->getName()." con ".$damage1." de daño<br>";
        echo "La salud de ".$pokemon2->getName()." es ".$pokemon2->getHealth()."<br>";
        echo $pokemon2->getName()." ataca a ".$pokemon1->getName()." con ".$damage2." de daño<br>";
        echo "La salud de ".$pokemon1->getName()." es ".$pokemon1->getHealth()."<br>";
        echo "<br>";
    }

    if($pokemon1->getHealth() <= 0){
        echo $pokemon2->getName()." es el ganador<br>";
    }
    else{
        echo $pokemon1->getName()." es el ganador<br>";
    }
}

$pokemon1 = new Pokemon("Pikachu", "Electric", 200, 30, 0, 0.5, 3);
$pokemon2 = new Pokemon("Snorlax", "Normal", 550, 40, 15, 0.9, 2);

battle($pokemon1, $pokemon2);