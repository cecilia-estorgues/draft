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

function convertType2Class(string $spe): string
{
    $str = strtolower($spe);
    return preg_replace('/(é|è)/', 'e', $str);
}
