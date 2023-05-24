<?php 

require_once 'app/model/databaseco.php';
require_once 'app/model/produit.model.php';
require_once 'app/controller/produits.controller.php';

$css="produit.css";
$dbco=getdbco();
$Produit= getProduit($dbco);


