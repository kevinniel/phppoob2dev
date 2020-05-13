<?php

include_once('typeDePersonnage.php');
include_once('ville.php');
include_once('main.php');

Class Personnage extends Main
{
	public $nom;
	public $nomDeFamille;
	public $metier;
	public $lieuDeVie;
	public $ville;
	public $typeDePersonnage;
	public $nomMaison;
	public $formeMaison;
	public $couleur;

	public function __construct(
		Array $datas
	) {
		// hydratation des données
		$this->hydrate($datas);
		// on dit bonjour
		$this->direBonjour();

		parent::__construct();
	}

	public function hydrate(Array $datas)
	{
		$this->nom = $datas["nom"];
		$this->nomDeFamille = $datas["nomDeFamille"];
		$this->metier = $datas["metier"];
		$this->lieuDeVie = $datas["lieuDeVie"];
		$this->ville = new Ville("lyon");
		$this->typeDePersonnage = new TypeDePersonnage($datas["typeDePersonnage"]);
		$this->nomMaison = $datas["nomMaison"];
		$this->formeMaison = $datas["formeMaison"];
		$this->couleur = $datas["couleur"];
	}

	public function direBonjour()
	{
		echo("Bonjour, merci de m'avoir créé, je m'appelle : " . $this->nom . " <br>");
	}

}