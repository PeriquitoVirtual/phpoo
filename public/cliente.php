<?php
$server = "localhost";
$user = "root";
$pass = "root";
$database =  "fruta";

$mysqli = new mysqli($server,$user,$pass,$database);


    $query = $_REQUEST['query'];
    $sql = "SELECT * FROM pessoa WHERE pessoa.nome LIKE '%{$query}%'";
$query2 = $mysqli->query($sql);
    while ($res = $query2->fetch_array()) {
        $array = $res['nome'];
    }
    echo json_encode($array); //Return the JSON Array
var_dump($array);

