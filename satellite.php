<?php

class Satellite extends Planet
{
    public $visite = TRUE;
    public function __construct(bool $visite) {
        $this->visite = $visite;
    }
}

$lune = new Satellite(True);