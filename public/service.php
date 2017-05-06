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

$container['itemPedido'] = function (){
    return new \Source\ItemPedido;
};
$container['ServiceItemPedido'] = function ($c){
    return new \Source\ServiceItemPedido($c['conn'],$c['itemPedido']);

};


$container['pessoa'] = function (){
    return new \Source\Pessoa;
};


$container['ServicePessoa'] = function ($c){
    return new \Source\ServicePessoa($c['conn'],$c['pessoa']);

};


$container['sugest'] = function (){
    return new \Source\Sugest;
};
$container['ServiceSugest'] = function ($c){
    return new \Source\ServiceSugest($c['conn'],$c['sugest']);

};