<?php

$page_title= 'Jeu';
$css='jeu.css';



ob_start();
include 'app/view/jeu.view.php';
$content=ob_get_clean();

include 'app/view/common/layout.php';