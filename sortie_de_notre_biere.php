<?php

$page_title= 'Sortie de notre bière';
$css='sortie_de_notre_biere.css';



ob_start();
include 'app/view/sortie_de_notre_biere.view.php';
$content=ob_get_clean();

include 'app/view/common/layout.php';