<?php
$page_title= 'Ajouter un client';
$css='addnewclient.css';



ob_start();
include 'app/view/addnewclient.view.php';
$content=ob_get_clean();

include 'app/view/common/layout.php';