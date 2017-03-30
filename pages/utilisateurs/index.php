<?php
	$utilisateurs = App::getInstance()->getTable('utilisateur')->toutAvecService();
	$services = App::getInstance()->getTable("service")->all();
?>
<h2> liste de tout les utilisateurs </h2>

<form action="index.php?p=utilisateurs.service" method="post" class="form-inline">
	<select name="id" class="form-control">
		<?php foreach ($services as $service): ?>
			<option value="<?= $service->id ?>"><?= $service->nom_du_service ?></option>
		<?php endforeach ?>
	</select>
	<input type="submit" value="filtrer" class="btn btn-primary">
</form>
<table class="table table-bordered">
	<thead>
		<tr>
			<th> Nom, Prenom </th>
			<th> Age </th>
			<th> Adresse complète </th>
			<th> Numero de téléphone  </th>
			<th> Service </th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($utilisateurs as  $utilisateur): ?>
			<tr>
				<td> <?= $utilisateur->identite; ?>  </td>
				<td> <?= $utilisateur->age; ?> </td>
				<td> <?= $utilisateur->adresse_complete; ?> </td>
				<td> <?= $utilisateur->numero_de_telephone; ?>  </td>
				<td> <?= $utilisateur->service; ?> </td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>
