<?php


class Pokemon
{
    private $name;
    private $energyType;
    private $HP;
    private $health;
    private $attack1;
    private $attack2;
    private $speed;
    private $weakness;
    private $resistance;

    function __construct($name, $energyType, $HP, $health, $attack1, $attack2, $speed, $resistance, $weakness) {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->HP = $HP;
        $this->health = $health;
        $this->attack1 = $attack1;
        $this->attack2 = $attack2;
        $this->speed = $speed;
        $this->resistance = $resistance;
        $this->weakness = $weakness;
    }

    function getName() {
        return $this->name;
    }
    function getEnergyType() {
        return $this->energyType;
    }

    function getHP() {
        return $this->HP;
    }

    function getHealth() {
        return $this->health;
    }
    function setHealth($health) {
        $this->health = $health;
    }
    function getAttack1() {
        return $this->attack1;
    }
    function getAttack2() {
        return $this->attack2;
    }
    function getSpeed() {
        return $this->speed;
    }
    function getResistance() {
        return $this->resistance;
    }
    function getWeakness() {
        return $this->weakness;
    }
}

class resistance
{
    public $APSValue;
    public $spAPSvalue;

    function __construct($APSValue, $spAPSvalue){
        $this->APSValue = $APSValue;
        $this->spAPSvalue = $spAPSvalue;
    }

    public function getAPSValue()
    {
        return $this->APSValue;
    }

    public function getspAPSvalue()
    {
        return $this->spAPSvalue;
    }

}

class weakness
{
    public $name;
    public $multiplier;

    function __construct($name, $multiplier)
    {
        $this->name = $name;
        $this->multiplier = $multiplier;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getMultiplier()
    {
        return $this->multiplier;
    }
}
class attacks
{
    public $name;
    public $damage;
    public $type;


    function __construct($name, $damage, $type){
        $this->name = $name;
        $this->damage = $damage;
        $this->type = $type;
    }

    public function getName(){
        return $this->name;
    }
    public function getDamage(){
        return $this->damage;
    }
    public function getType(){
        return $this->type;
    }
}

//inheritance neemt de values over van pokemon
class temperature extends Pokemon{
    private $temperature;

    public function __construct($name, $energyType, $HP, $health, $attack1, $attack2, $speed, $resistance, $weakness, $temperature)
    {
        parent::__construct($name, $energyType, $HP, $health, $attack1, $attack2, $speed, $resistance, $weakness);
        $this->temperature = $temperature;
    }
    public function getTemperature()
    {
        return $this->temperature;
    }

}
class current extends Pokemon{
    private $current;

    public function __construct($name, $energyType, $HP, $health, $attack1, $attack2, $speed, $resistance, $weakness, $current)
    {
        parent::__construct($name, $energyType, $HP, $health, $attack1, $attack2, $speed, $resistance, $weakness);
        $this->current = $current;
    }
    public function getCurrent()
    {
        return $this->current;
    }

}
// 