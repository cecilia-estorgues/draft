<?php

$page_title= 'Actualités' . ' | Draft';
$css='actualites.css';



ob_start();
include 'app/view/actualites.view.php';
$content=ob_get_clean();

include 'app/view/common/layout.php';