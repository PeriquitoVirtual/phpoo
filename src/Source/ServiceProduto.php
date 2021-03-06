<?php


namespace Source;


class ServiceProduto implements IServiceProduto
{

    private $db;
    private $produto;

    public function __construct(IConn $db, IProduto $produto){

        $this->db = $db->connect();
        $this->produto = $produto;
    }

    public function list(){
        $itens_por_pagina = 10;

        if ($_GET['pagina']){
            $pagina = $_GET['pagina'];
        }else $pagina = 0;

        $query1 = "SELECT item.id, item.item, item.id_subcategoria, nome from item 
                   JOIN subcategoria 
                   WHERE item.id_subcategoria = subcategoria.id 
                   LIMIT $pagina, $itens_por_pagina
                  ";
        $stmt = $this->db->prepare($query1);
        $stmt->execute();



       return $stmt->fetchAll(\PDO::FETCH_ASSOC);


    }

    public function listProduto(){


        $query1 = "SELECT item.id, item.item, item.id_subcategoria, nome from item 
                   JOIN subcategoria 
                   WHERE item.id_subcategoria = subcategoria.id 
                   LIMIT $pagina, $itens_por_pagina
                  ";
        $stmt = $this->db->prepare($query1);
        $stmt->execute();



        return $stmt->fetchAll(\PDO::FETCH_ASSOC);


    }

    public function sugest(){

        $busca = $_POST['query2'];

        $query1 = "SELECT * from item WHERE item LIKE '%$busca%'";
        $stmt = $this->db->prepare($query1);
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