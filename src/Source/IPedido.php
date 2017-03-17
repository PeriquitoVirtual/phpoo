<?php

namespace Source;


interface IPedido
{
    public function getId();
    public function setId($id);
    public function getDataPedido();
    public function setDataPedido($dataPedido);
    public function getDataEntrega();
    public function setDataEntrega($dataEntrega);
    public function getIdPessoa();
    public function setIdPessoa($idPessoa);

}