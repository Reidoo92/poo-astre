<?php

class Satellite extends Planet
{
    public $visite = TRUE;
    public function __construct($visite) {
        $this->visite = $visite;
    }
}

$lune = new Satellite(True);