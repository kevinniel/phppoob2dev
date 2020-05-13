<?php

include_once('main.php');

Class Ville extends Main
{

	public $nom;

	public function __construct($nom)
	{
		$this->nom = $nom;

		parent::__construct();
	}

}