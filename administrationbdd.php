<?php
$page_title= 'Administration bdd';
$css='administration.css';



ob_start();
include 'app/view/administration.view.php';
$content=ob_get_clean();

include 'app/view/common/layout.php';