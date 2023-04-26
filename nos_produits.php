<?php 

require_once 'app/model/databaseco.php';
require_once 'app/model/produit.model.php';

$dbco = getdbco();
$pokedex = getProduit($dbco);

$page_title = 'Nos produits';

ob_start();
require_once 'app/view/pokedex.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php'; 