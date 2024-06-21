<?php

require_once './Aster.php';
require_once './Planet.php';
require_once './Satellite.php';
require_once './Star.php';


$soleil = new Aster("soleil", 5.9737*(10**24), 13000);
$gravity = $soleil->calculGravity();
echo $gravity;


$lune = new Satellite('lune', 200000, 6000, 'satelitte', false, true);
echo $lune;

$terre = new Planet('terre', 50000, 13000, 'planete', true);
$terre->deathStar();


$sun = new Star('Soleil', 600000, 54545, 5772, 1);
$sun->typeStar();