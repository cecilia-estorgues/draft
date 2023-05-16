<?php

function getProduit(PDO $dbco): array 
{
$sql="SELECT nom_produit FROM produit";
 $query=$dbco->query($sql);
$results=$query->fetchAll();

return $results;
}

function convertType2Class(string $type): string
{
    $str = strtolower($type);
    return preg_replace('/(é|è)/', 'e', $str);   
}

function Linknametoref(array $produits, PDO $dbco): array
{

    $sql = "SELECT nom_produit FROM produit";
    $stmt = $dbco->prepare($sql);

    $nos_produits = [];
    foreach ($produits as $produit) {
        $stmt->bindParam('nom_produit', $produit['reference'], PDO::PARAM_INT);
        $stmt->execute();

        $nos_produits[] = $produit;
    }

    return $nos_produits;
}