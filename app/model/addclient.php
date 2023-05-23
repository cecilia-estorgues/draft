<?php

function insertNewClient(string $nom, string $prenom,string $adresse,  string $code_postal, string $ville, string $email, PDO $dbco): bool
{
    try {
$sql = "INSERT INTO client (nom, prenom, adresse, code_postal, ville, mail)
VALUES (:nom, :prenom, :adresse, :code_postal, :ville, :mail)";
$stmt = $dbco->prepare($sql);
$stmt->bindParam('nom', $nom);
$stmt->bindParam('prenom', $prenom);
$stmt->bindParam('adresse', $adresse);
$stmt->bindParam('code_postal', $code_postal);
$stmt->bindParam('ville', $ville);
$stmt->bindParam('mail', $email);




return $stmt->execute();
} 
catch (PDOException $e) {throw $e;}}