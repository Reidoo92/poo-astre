<?php

require './planet.php';

class Satellite extends Planet
{
    public $visited = TRUE;
    public function __construct(float $name, float $mass, float $diameter, string $type ,bool $habitable, bool $visited = false, float $speed = null, bool $sattelite = null, float $rotationCenter = null) {
        parent::__construct($name, $mass, $diameter, $type , $habitable, $speed = null, $sattelite = null, $rotationCenter = null);
        $this->visited = $visited;
    }

    public function __toString() {
        if($this->visited) {
            return $this->name. "a été visité";
        } else {
            return $this->name. "n'a pas été visité";
        }
    }
}

$lune = new Satellite(true);