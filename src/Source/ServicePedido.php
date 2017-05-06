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

        $query = "SELECT item_pedido.quantidade, 
       pedido.id,
       pedido.dataEntrega,
       pedido.dataPedido, 
       item.item,
       pessoa.nome
       from item_pedido
      INNER JOIN pedido
      ON pedido.id = item_pedido.idpedido 
      INNER JOIN pessoa
       ON pessoa.id = pedido.idpessoa 
       INNER JOIN item
       ON item.id = item_pedido.iditem  
       ORDER BY pedido.id ";

        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);

    }


    public function save(){

        $query = "INSERT into pedido (dataPedido, dataEntrega, idPessoa)
                  VALUES (:dataPedido,:dataEntrega,:idpessoa)";

        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":dataPedido", $this->pedido->getDataPedido());
        $stmt->bindValue(":dataEntrega", $this->pedido->getDataEntrega());
        $stmt->bindValue(":idpessoa", $this->pedido->getIdPessoa());

        $stmt->execute();

        return $this->db->lastInsertId();

    }

    public function all(){

        $query = "SELECT * FROM products";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }


    public function update(){

    }


    public function delete(){

    }
}