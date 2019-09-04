<?php
require_once('./Human.php');
require_once('./Fuma.php');
require_once('./Masa.php');
require_once('./Kan.php');

$fuma = new Fuma('fuma', 21, 1.75, 100);

$fuma->greeting();
$fuma->selfIntroduction();
$fuma->calcBmi();

$masa = new Masa('masa', 22, 1.7, 50);

$masa->greeting();
$masa->selfIntroduction();
$masa->calcBmi();

$kan = new Kan();
$kan->setHuman($fuma);
$kan->setHuman($masa);
// var_dump($kan->jail);
$kan->letCry(0);
$kan->letCry(1);
