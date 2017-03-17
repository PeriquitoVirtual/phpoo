<?php

namespace Source;


interface IProduto
{
    public function getId();
    public function setId($id);
    public function getItem();
    public function setItem($item);
    public function getTipo();
    public function setTipo($tipo);

}