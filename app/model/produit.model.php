<?php

function getProduit(PDO $dbco): array
{
    $sql = "SELECT * FROM produit";
    $query = $dbco->query($sql);
    $results = $query->fetchAll();

    return $results;
}

function convertType2Class(string $spe): string
{
    $str = strtolower($spe);
    return preg_replace('/(é|è)/', 'e', $str);
}
