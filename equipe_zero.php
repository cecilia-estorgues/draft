<?php

$page_title= 'Notre équipe: Zero';
$css='perso_zero.css';



ob_start();
include 'app/view/equipe_zero.view.php';
$content=ob_get_clean();

include 'app/view/common/layout.php';