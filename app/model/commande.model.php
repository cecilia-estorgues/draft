<?php

function getCommande(PDO $dbco): array
{
    $sql = "SELECT * FROM commande";
    $query = $dbco->query($sql);
    $results = $query->fetchAll();

    return $results;
}