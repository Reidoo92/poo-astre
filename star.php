<?php

require './aster.php';

class Star extends Aster 
{
    public $temperature = 0;
    public $solarMass = 0;

    public function __construct( float $name, float $mass, float $diameter, float $speed = null, float $temperature, float $solarMass) {
        parent::__construct($name, $mass, $diameter, $speed = null);
        $this-> temperature = $temperature;
        $this-> solarMass = $solarMass;
    }

    public function typeStar() {
        if ($this->temperature <= 2000) {
            return "$this->name est une naine brune!";
        } elseif ($this->temperature > 2000 && $this->temperature< 5000){
            return "$this->name est une naine rouge!";
        } elseif ($this->temperature >= 5000 && $this->temperature < 6000){
            return "$this->name est une naine jaune!";
        }
    }
}

$sun = new Star(5772, 1);

$sun->typeStar();