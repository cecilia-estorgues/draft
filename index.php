<?php

$page_title= 'Accueil';
$css='index.css';



ob_start();
include 'app/view/index.view.php';
$content=ob_get_clean();

include 'app/view/common/layout.php';