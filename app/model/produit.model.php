<?php

function getProduit(PDO $dbco): array 
{
$sql="SELECT reference as ref, nom_produit FROM produit";
$query=$dbco->query($sql);
$results=$query->fetchAll();

return $results;
}

function convertType2Class(string $type): string
{
    $str = strtolower($type);
    return preg_replace('/(é|è)/', 'e', $str);   
}