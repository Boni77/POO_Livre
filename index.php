<?php
require_once "Livre.php";
require_once "Auteur.php";

$stephan = new Auteur("KING", "Stephan");
$livre = new Livre('CA', 1138, 1986, 20, $stephan);
$livre = new Livre('Simetierre', 374, 1986, 15, $stephan);
$livre = new Livre('Le Fléau', 823, 986, 14, $stephan);
$livre = new Livre('Shinning', 447, 1986, 16, $stephan);

$stephan->afficherLivres();
