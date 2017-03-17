<?php


$container['conn'] = function($c){
    return new \Source\Conn($c['dsn'],$c['user'],$c['pass']);
};


$container['produto'] = function (){
    return new \Source\Produto;
};

$container['ServiceProduto'] = function ($c){
    return new \Source\ServiceProduto($c['conn'],$c['produto']);

};

$container['pedido'] = function (){
    return new \Source\Pedido;
};

$container['ServicePedido'] = function ($c){
    return new \Source\ServicePedido($c['conn'],$c['pedido']);

};