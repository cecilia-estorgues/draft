<?php 

require_once 'app/model/databaseco.php';
require_once 'app/model/produit.model.php';

$css="produit.css";
$dbco = getdbco();
$pokedex = getProduit($dbco);

$page_title = 'Nos produits';

ob_start();
require_once 'app/view/produit.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php'; 