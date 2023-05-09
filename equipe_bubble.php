<?php

$page_title= 'Notre équipe: Bubble';
$css='perso_bubble.css';



ob_start();
include 'app/view/equipe_bubble.view.php';
$content=ob_get_clean();

include 'app/view/common/layout.php';