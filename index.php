<?php

include_once("classes/personnage.php");
include_once("classes/ville.php");
include_once("groupes-2.php");

// $bob = new Personnage();
// $bob->nom = "bob";
// $bob->nomDeFamille = "l'éponge";
// $bob->metier = "cuisto";
// $bob->lieuDeVie = "mer";
// $bob->ville = "bikini bottom";
// $bob->typeDePersonnage = "eponge";
// $bob->nomMaison = "Pagode";
// $bob->formeMaison = "ananas";
// $bob->couleur = "jaune";
// dd($bob);

// dd($personnage1);

$bob = new Personnage($personnage1);
echo("<br>");
$gary = new Personnage($personnage2);
echo("<br>");
var_dump("personnage : <br>", Personnage::$_instances);
echo("<br>");
$paris = new Ville("paris");
echo("<br>");
var_dump("personnage : <br>", Personnage::$_instances);
echo("<br>");echo("<br>");
var_dump("ville : <br>", Ville::$_instances);
echo("<br>");



function ddd($array) {
	foreach($array as $a) {
		echo("<pre>");
		echo("<code>");
		var_dump($a);
		echo("</code>");
		echo("</pre>");
	}
	die();
}

function dd($a) {
	echo("<pre>");
	echo("<code>");
	var_dump($a);
	echo("</code>");
	echo("</pre>");
	die();
}