<?php

require_once 'app/model/databaseco.php';
require_once 'app/model/produit.model.php';
require_once 'app/produit.php';

function getProduit(PDO $dbco): array{
    $sql = "SELECT * FROM produit";
    $query = $dbco->query($sql);
    $results = $query->fetchAll();

    return $results;
}



function generateProduitPage($Produit) 
{
    $db = getdbco();
    $reference = $Produit['reference'];
    $nom_produit = $Produit['nom_produit'];
    $type = $Produit['type'];
    $description = $Produit['description'];
    $prix = $Produit['prix'];
    $taux_alcool = $Produit['taux_alcool'];
    $particularite = $Produit['particularite'];
    $IBU = $Produit['ibu']; 

    // Génération de la page à partir de la vue et du layout
    $page_title = $Produit['nom_produit'];
    ob_start();
    require_once 'app/view/produit.view.php';
    $content = ob_get_clean();
    require_once 'app/view/common/layout.php';
}