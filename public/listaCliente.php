

<?php
require_once "../vendor/autoload.php";
require_once "config.php";
require_once "service.php";
//require_once "header.php";

$listSugest = $container['ServicePessoa']->sugest();


$output = '<ul class="list-unstyled">';

foreach ($listSugest as $row) {
    $output .= '<li>'.$row['nome']."  - ". $row['id'].'</li>';
  }

$output .= '</ul>';
echo $output;
//echo $array;
