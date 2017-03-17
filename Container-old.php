<?php


class Container{

    public static function getProduto(){

        return new Produto(self::getConn());

    }

    public static function getConn(){

        return new Conn("mysql:host=localhost;dbname=frutaeraiz","root","pvirtual@2017");
    }

}