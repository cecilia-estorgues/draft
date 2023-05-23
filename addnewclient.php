<?php

require_once 'app/model/databaseco.php';
require_once 'app/model/addclient.php';



if (empty($_POST['nom'])) {
    die('Veuillez saisir un nom de client');
}
if (empty($_POST['prenom'])){
    die('Veuillez saisir un prenom de client');
}
if (empty($_POST['adresse'])) {
    die('Veuillez saisir une adresse');
}
if (empty($_POST['code_postal'])){
    die('Veuillez saisir un code postal');
}
if (empty($_POST['ville'])) {
    die('Veuillez saisir un nom de ville');
}
if (empty($_POST['email'])){
    die('Veuillez saisir email valide');
}

$dbco= getdbco();

try {
$success = insertNewClient($_POST['nom'], $_POST['prenom'], $_POST['adresse'], $_POST['code_postal'], $_POST['ville'], $_POST['email'], $dbco);
$msg = "Le nouveau talent a bien été enregistré";
echo "Nouveau produit enregistrer avec succès";
} catch (PDOException $e){
$msg = "Il y'a eu un problème avec l'enregistrement du talent";
echo $e->getMessage();
}