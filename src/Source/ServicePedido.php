<?php


namespace Source;


class ServicePedido implements IServicePedido
{

    private $db;
    private $pedido;

    public function __construct(IConn $db, IPedido $pedido){

        $this->db = $db->connect();
        $this->pedido = $pedido;
    }

    public function list(){

        $query = "SELECT * from pedido";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);

    }


    public function save(){

    }


    public function update(){

    }


    public function delete(){

    }
}