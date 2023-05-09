<?php

$page_title= 'Notre équipe: Fraise';
$css='perso_fraise.css';



ob_start();
include 'app/view/equipe_fraise.view.php';
$content=ob_get_clean();

include 'app/view/common/layout.php';