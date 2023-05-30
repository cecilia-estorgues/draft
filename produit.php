<?php 

require_once 'app/model/databaseco.php';
require_once 'app/model/produit.model.php';
$css="produit.css";
$nomproduit = $_GET['nom'] ;

generateProduitPage($nomproduit);

$page_title = $nomproduit;
ob_start();
require_once 'app/view/produit.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php';



