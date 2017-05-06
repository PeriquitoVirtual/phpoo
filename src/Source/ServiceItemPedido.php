<?php


namespace Source;


class ServiceItemPedido implements IServiceItemPedido
{

    private $db;
    private $itempedido;

    public function __construct(IConn $db, IItemPedido $itempedido){

        $this->db = $db->connect();
        $this->itempedido = $itempedido;
    }

    public function list(){

        $query = "SELECT * from item_pedido, pedido, item 
       WHERE item_pedido.idpedido = pedido.id
       AND item_pedido.iditem = item.id
                  
              
                  ";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);

    }


    public function save(){

        $query = "INSERT into item_pedido (iditem, quantidade, idpedido)
                  VALUES (:iditem,:quantidade,:idpedido)";

        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":iditem", $this->itempedido->getIdItem());
        $stmt->bindValue(":quantidade", $this->itempedido->getQuantidade());
        $stmt->bindValue(":idpedido", $this->itempedido->getIdPedido());

        $stmt->execute();

        return $this->db->lastInsertId();

    }


    public function update(){

    }


    public function delete(){

    }
}