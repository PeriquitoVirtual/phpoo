

<?php
require_once "../vendor/autoload.php";
require_once "config.php";
require_once "service.php";
//require_once "header.php";

$listSugest2 = $container['ServiceProduto']->sugest();


$output2 = '<div class="list-unstyled">';

foreach ($listSugest2 as $row2) {
    $output2 .= '<p>'.$row2['item']."  - ". $row2['id'].'</p>';
  }

$output2 .= '</div>';
echo $output2;
//echo $array;
