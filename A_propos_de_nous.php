<?php

$page_title= 'A propos de nous';
$css='a_propos_de_nous.css';



ob_start();
include 'app/view/a_propos_de_nous.view.php';
$content=ob_get_clean();

include 'app/view/common/layout.php';