<?php

function getBiere(PDO $dbco): array
{
    $sql = "SELECT * FROM produit WHERE type='biere'";
    $query = $dbco->query($sql);
    $results = $query->fetchAll();

    return $results;
}

function getGoodies(PDO $dbco): array
{
    $sql = "SELECT * FROM produit WHERE type='goodies'";
    $query = $dbco->query($sql);
    $results = $query->fetchAll();

    return $results;
}

function getProduit(string $nomproduit, $dbco): array{
    $dbco=getdbco();
    $sql="SELECT * FROM produit WHERE nom_produit=:nom";
    $stmt=$dbco->prepare($sql);
    $stmt->bindParam('nom', $nomproduit);
    $stmt->execute();
    $results = $stmt->fetchAll();
    return $results;
}



function generateProduitPage($nomproduit) 
{
    $dbco = getdbco();
    $produit= getProduit($nomproduit, $dbco);
}