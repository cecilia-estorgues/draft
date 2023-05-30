<?php 

require_once 'app/model/databaseco.php';
require_once 'app/model/commandes.model.php';

$dbco=getdbco();
$nos_commandes= getClient($dbco);
$page_title= 'Commandes Clients';


ob_start();
include 'app/view/commandes.view.php';
$content=ob_get_clean();

include 'app/view/common/layout.php';