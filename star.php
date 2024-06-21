<?php

class Star extends Aster 
{
    public $temperature = 0;
    public $solarMass = 0;

    public function __construct( float $name, float $mass, float $diameter, float $speed = null, float $temperature, float $solarMass) {
        parent::__construct($name, $mass, $diameter, $speed = null);
        $this-> temperature = $temperature;
        $this-> solarMass = $solarMass;
    }
}

$soleil = new Star(5772, 1);