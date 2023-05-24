<?php

require_once 'app/model/databaseco.php';
require_once 'app/model/addcommand.php';




$dbco= getdbco();

try {
$success = insertNewCommand($_POST['nom'], $_POST['quantite'], $_POST['Identifiant'], $dbco);
$msg = "Le nouveau talent a bien été enregistré";
echo "Nouveau produit enregistrer avec succès";
} catch (PDOException $e){
$msg = "Il y'a eu un problème avec l'enregistrement du talent";
echo $e->getMessage();
}