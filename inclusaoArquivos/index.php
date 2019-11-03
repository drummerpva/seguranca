<?php

require "header.php";
$p = "home";
if (!empty($_GET['p'])) {
    $pag = $_GET['p'];
    if(strpos($pag, '.') === false){
        if(file_exists("paginas/".$pag.".php")){
            $p = $pag;
        }
    }
}
require "paginas/".$p.".php";
require "footer.php";
