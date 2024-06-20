<?php

class Aster
{
    public $name;
    public $mass;
    public $diameter;
    public $speed;
    public $gravity;

    public function __construct($name, $mass, $diameter, $speed, $gravity){
        $this->name = $name;
        $this->mass = $mass;
        $this->diameter = $diameter;
        $this->speed = $speed;
        $this->gravity = $gravity;
    }

    public function showMass(){
        echo $this->name . 'à une masse de ' . $this->mass;
    }
}
