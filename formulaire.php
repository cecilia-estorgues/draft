<?php
$page_title= 'Nouvelle commande';
$css='formulaire.css';



ob_start();
include 'app/view/formulaire.view.php';
$content=ob_get_clean();

include 'app/view/common/layout.php';