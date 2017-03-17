<?php

namespace Source;

class Pedido implements IPedido  {

    private $id;
    private $dataPedido;
    private $dataEntrega;
    private $idPessoa;


    public function getId(){
        return $this->id;
    }


    public function setId($id){
        $this->id = $id;
        return $this;
    }


    public function getDataPedido()    {
        return $this->dataPedido;
    }


    public function setDataPedido($dataPedido) {
        $this->dataPedido = $dataPedido;
        return $this;
    }


    public function getDataEntrega(){
        return $this->dataEntrega;
    }


    public function setDataEntrega($dataEntrega){
        $this->dataEntrega = $dataEntrega;
        return $this;
    }


    public function getIdPessoa(){
        return $this->idPessoa;
    }


    public function setIdPessoa($idPessoa){
        $this->idPessoa = $idPessoa;
        return $this;
    }


}