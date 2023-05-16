<?php

function insertNewProduit(string $type, string $nom,string $descr, string $prix, string $taux, string $particul, string $ibu, string $volume, PDO $dbco): bool
{
    try {
$sql = "INSERT INTO produit ( type, nom_produit, description, prix, taux_alcool, particularite, ibu, volume)
VALUES ( :type, :nom_produit, :description, :prix, :taux_alcool, :particularite, :ibu, :volume)";
$stmt = $dbco->prepare($sql);
$stmt->bindParam('type', $type);
$stmt->bindParam('nom_produit', $nom);
$stmt->bindParam('description', $descr);
$stmt->bindParam('prix', $prix);
$stmt->bindParam('taux_alcool', $taux);
$stmt->bindParam('particularite', $particul);
$stmt->bindParam('ibu', $ibu);
$stmt->bindParam('volume', $volume);



return $stmt->execute();
} 
catch (PDOException $e) {throw $e;}}