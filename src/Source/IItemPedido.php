<?php

namespace Source;


interface IItemPedido
{
    public function getId();
    public function setId($id);
    public function getIdItem();
    public function setIdItem($idItem);
    public function getQuantidade();
    public function setQuantidade($quantidade);
    public function getIdPedido();
    public function setIdPedido($idPedido);

}