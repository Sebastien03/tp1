<?php
namespace App\Entity;

use Core\Entity\Entity;

/**
* classe pour les resultats de la table utilisateurs
*/
class UtilisateurEntity extends Entity
{
	public function getAge()
	{
		return (int)((time()-strtotime($this->date_de_naissance))/(60*60*24*365)).' ans';
	}

	public function getIdentite()
	{
		return $this->nom.' '. $this->prenom;
	}
	public function getAdresse_complete()
	{
		return $this->adresse.' '. $this->code_postal;
	}
}
