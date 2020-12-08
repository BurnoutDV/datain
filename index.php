<?php
    require './config.example.php';
    //smarty -> here https://github.com/smarty-php/smarty/releases
    require './smarty/Smarty.class.php';
    $smarty = new Smarty;
    $smarty->caching = true;
    $smarty->cache_lifetime = 120;  

    $body = [
        "title" => "Simple Data Input/Output",
        "h1" => "Welkomen pa Websidan"
    ];

    $smarty->assign("body", $body);
    $smarty->display("index.tpl");
?>