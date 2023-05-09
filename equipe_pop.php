<?php

$page_title= 'Notre équipe: Chery pop';
$css='perso_pop.css';



ob_start();
include 'app/view/equipe_pop.view.php';
$content=ob_get_clean();

include 'app/view/common/layout.php';