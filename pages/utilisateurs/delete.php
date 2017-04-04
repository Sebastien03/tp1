<?php
if (isset($_GET["id"])) {
	App::getInstance()->getTable('utilisateur')->delete($_GET["id"]);
	header('location: index.php?p=utilisateurs.index');
}