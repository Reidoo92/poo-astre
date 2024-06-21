<?php

class Planet extends Aster 
{
    public $type ;
    // public Aster $rotationCenter;
    public $rotationCenter;
    //public Planet $sattelite;
    public $sattelite;
    public $habitable;

    public function __construct(string $name, float $mass, float $diameter, string $type ,bool $habitable, float $speed = null, bool $sattelite = null, float $rotationCenter = null){
        parent::__construct($name, $mass, $diameter, $speed = null);
        $this->type = $type ; 
        $this->rotationCenter = $rotationCenter;
        $this->sattelite = $sattelite;
        $this->habitable = $habitable;
        
    }

    public function deathStar() {
        echo 'MOUAHAHAHHA JE TE TIRE DESSUS' . PHP_EOL;
        sleep(1);
        echo 'PIOU PIOU PIOU' . PHP_EOL;
        sleep(1);
        echo 'BOUUUUMMMM'. PHP_EOL;
    }

}

