<?php

class Satellite extends Planet
{
    public $visite = TRUE;
    public function __construct(bool $visite) {
        $this->visite = $visite;
    }

    public function __toString() {
        if($this->visite) {
            return $this->name. "a été visité";
        } else {
            return $this->name. "n'a pas été visité";
        }
    }
    
}

$lune = new Satellite(True);