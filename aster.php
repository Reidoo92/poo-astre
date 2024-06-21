<?php

class Aster
{
    public string $name;
    public $mass;
    public $diameter;
    public $speed;
    public $g =  6.674*(10**(-11));

    public function __construct(float $name, float $mass, float $diameter, float $speed = null){
        $this->name = $name;
        $this->mass = $mass;
        $this->diameter = $diameter;
        $this->speed = $speed;
    }

    public function calculGravity(){
        return $this->g * $this->mass / (($this->diameter*1000/2)**2);
    }

}

$soleil = new Aster("soleil", 5.9737*(10**24), 13000, 3000);
$gravity = $soleil->calculGravity();

echo $gravity;