<?php 

require_once 'app/model/databaseco.php';
require_once 'app/model/client.model.php';

$dbco=getdbco();
$nos_clients= getClient($dbco);
$page_title= 'Verification client';
$css='verif_client.css';



ob_start();
include 'app/view/verif_client.view.php';
$content=ob_get_clean();

include 'app/view/common/layout.php';