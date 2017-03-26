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

        $query = "SELECT * from pedido, item_pedido, pessoa, item 
       WHERE pedido.id = item_pedido.idpedido 
       AND pedido.idpessoa = pessoa.id
       AND item_pedido.iditem = item.id
                  
              
                  ";
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