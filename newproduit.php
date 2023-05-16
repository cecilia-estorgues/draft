<?php
$page_title= 'Ajouter un produit';
$css='addnewproduit.css';



ob_start();
include 'app/view/addnewproduit.view.php';
$content=ob_get_clean();

include 'app/view/common/layout.php';