<?php

require_once 'app/model/databaseco.php';
require_once 'app/model/produit.model.php';
require_once 'produit.php';


function getProduit(PDO $dbco): array{
    $nomproduit = $_GET['nom'];
    $sql = "SELECT * FROM produit WHERE nom_produit=$nomproduit";
    $query = $dbco->query($sql);
    $results = $query->fetchAll();

    return $results;
}



function generateProduitPage($nomproduit) 
{
    $dbco = getdbco();
    $produit= getProduit($dbco);
    var_dump($produit);

    // Génération de la page à partir de la vue et du layout
    $page_title = $produit['nom_produit'];
    ob_start();
    require_once 'app/view/produit.view.php';
    $content = ob_get_clean();
    require_once 'app/view/common/layout.php';
}