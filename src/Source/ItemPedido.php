<?php

namespace Source;

class ItemPedido implements IItemPedido  {

    private $iditem;
    private $quantidade;
    private $idPedido;



    public function getId(){
        return $this->id;
    }


    public function setId($id){
        $this->id = $id;
        return $this;
    }


    public function getIdItem()    {
        return $this->iditem;
    }


    public function setIdItem($iditem) {
        $this->iditem = $iditem;
        return $this;
    }


    public function getQuantidade(){
        return $this->quantidade;
    }


    public function setQuantidade($quantidade){
        $this->quantidade = $quantidade;
        return $this;
    }


    public function getIdPedido(){
        return $this->idpedido;
    }


    public function setIdPedido($idPedido){
        $this->idpedido = $idPedido;
        return $this;
    }


}