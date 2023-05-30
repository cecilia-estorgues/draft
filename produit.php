<?php 

require_once 'app/model/databaseco.php';
require_once 'app/model/produit.model.php';
$css="produit.css";
$nomproduit = $_GET['nom'] ;
if (empty($_GET['nom'])) {
    die('Page introuvable');
}

$dbco = getdbco();
$produit= getProduit($nomproduit, $dbco);
$page_title = $nomproduit;
ob_start();
require_once 'app/view/produit.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php';



