<?php
namespace App\Table;

use Core\Table\Table;

/**
* classe pour controler la table utilisateurs
*/
class UtilisateurTable extends Table
{
	public function toutAvecService()
	{
		return $this->query("SELECT utilisateurs.id,
									utilisateurs.nom,
									utilisateurs.prenom,
									utilisateurs.date_de_naissance,
									utilisateurs.adresse,
									utilisateurs.code_postal,
									utilisateurs.numero_de_telephone,
									services.nom_du_service as service
							FROM utilisateurs
							LEFT JOIN services
							ON services_id = services.id
							");
	}
}
