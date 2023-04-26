<?php

function getProduit(PDO $dbco): array 
{
$sql = "SELECT num_pokemon as num, nom FROM pokemon WHERE num_forme=0";
$query = $dbco->query($sql);
$results = $query->fetchAll();

return $results;
}