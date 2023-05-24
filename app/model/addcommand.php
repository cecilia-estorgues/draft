<?php

function insertNewCommand(string $nom, string $quantite,string $Identifiant, PDO $dbco): bool
{
    try {
$sql = "INSERT INTO commande ( nom, , num_client)
VALUES ( :nom, :num_client)";
$stmt = $dbco->prepare($sql);
$stmt->bindParam('nom', $nom);
$stmt->bindParam('num_client', $Identifiant);
$stmt->bindParam('quantite', $quantite);




return $stmt->execute();
} 
catch (PDOException $e) {throw $e;}}