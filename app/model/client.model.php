<?php

function getClient(PDO $dbco): array
{
    $sql = "SELECT * FROM client";
    $query = $dbco->query($sql);
    $results = $query->fetchAll();

    return $results;
}