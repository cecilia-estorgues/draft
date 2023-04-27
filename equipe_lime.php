<?php

$page_title= 'Notre équipe: Lime';
$css='perso_lime.css';



ob_start();
include 'app/view/equipe_lime.view.php';
$content=ob_get_clean();

include 'app/view/common/layout.php';