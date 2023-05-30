<?php

function getCommande(PDO $dbco): array
{
    $sql = "SELECT * FROM commande NATURAL JOIN contenir";
    $query = $dbco->query($sql);
    $results = $query->fetchAll();

    return $results;
}