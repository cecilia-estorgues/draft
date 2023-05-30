<?php 

require_once 'app/model/databaseco.php';
require_once 'app/model/commande.model.php';

$dbco=getdbco();
$nos_commandes= getCommande($dbco);
$page_title= 'Commandes Clients';
$css='commandeverif.css';


ob_start();
include 'app/view/commande.view.php';
$content=ob_get_clean();

include 'app/view/common/layout.php';