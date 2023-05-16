<?php


$page_title= 'Nos évènements';
$css='evenements.css';



ob_start();
include 'app/view/evenements.view.php';
$content=ob_get_clean();

include 'app/view/common/layout.php';