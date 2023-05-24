<?php 

require_once 'app/model/databaseco.php';
require_once 'app/model/produit.model.php';
require_once 'app/controller/produits.controller.php';

$nomproduit = $_GET['nom'];
$css="produit.css";
generateProduitPage($nomproduit);



