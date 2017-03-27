

<?php
require_once "../vendor/autoload.php";
require_once "config.php";
require_once "service.php";
//require_once "header.php";

$listSugest = $container['ServiceSugest']->list();
//var_dump($listSugest);
foreach ($listSugest as $value){
    $array = $value["nome"];

    echo json_encode ($array);
}




