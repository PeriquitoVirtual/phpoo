<?php

namespace Source;

class Produto implements IProduto {

    private $id;
    private $item;
    private $tipo;


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }


    public function getItem()
    {
        return $this->item;
    }


    public function setItem($item)
    {
        $this->item = $item;
        return $this;
    }


    public function getTipo()
    {
        return $this->tipo;
    }


    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
        return $this;
    }

}