<?php

$page_title= 'Notre équipe: Luciole';
$css='perso_luciole.css';



ob_start();
include 'app/view/equipe_luciole.view.php';
$content=ob_get_clean();

include 'app/view/common/layout.php';