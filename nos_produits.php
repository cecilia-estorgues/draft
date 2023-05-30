<?php 

require_once 'app/model/databaseco.php';
require_once 'app/model/produit.model.php';

$css="produit.css";
$dbco=getdbco();
$nos_bieres= getBiere($dbco);
$nos_goodies= getGoodies($dbco);


$page_title = 'Nos produits';

ob_start();
require_once 'app/view/catalogue.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php'; 