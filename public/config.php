<?php
use Pimple\Container;

$container = new Container();

$container['dsn'] = "mysql:host=localhost;dbname=fruta";
$container['user'] = "root";
$container['pass'] = "root";


