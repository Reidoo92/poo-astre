<?php

class Star extends Aster 
{
    public $temperature = 0;
    public $solarMass = 0;
    public function __construct($temperature, $solarMass) {
        $this-> temperature = $temperature;
        $this-> solarMass = $solarMass;
    }
}

$soleil = new Star(5772, 1);