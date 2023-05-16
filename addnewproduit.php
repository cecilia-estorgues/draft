<?php

require_once 'app/model/databaseco.php';
require_once 'app/model/addproduit.php';



if (empty($_POST['type'])) {
    die('Veuillez saisir un nom de type');
}
if (empty($_POST['nom'])){
    die('Veuillez saisir un nom de produit');
}
if (empty($_POST['descr'])) {
    die('Veuillez saisir une description');
}
if (empty($_POST['prix'])){
    die('Veuillez saisir un prix');
}
if (empty($_POST['ibu'])) {
    die('Veuillez saisir un ibu');
}
if (empty($_POST['volume'])){
    die('Veuillez saisir un volume');
}

$dbco= getdbco();

try {
$success = insertNewProduit($_POST['type'], $_POST['nom'], $_POST['descr'], $_POST['prix'], $_POST['taux'], $_POST['particul'], $_POST['ibu'], $_POST['volume'], $dbco);
$msg = "Le nouveau talent a bien été enregistré";
} catch (PDOException $e){
$msg = "Il y'a eu un problème avec l'enregistrement du talent";
echo $e->getMessage();
}