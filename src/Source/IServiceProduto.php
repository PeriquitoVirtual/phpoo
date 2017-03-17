<?php
/**
 * Created by PhpStorm.
 * User: Periquito
 * Date: 27/02/2017
 * Time: 18:30
 */

namespace Source;


interface IServiceProduto
{
    public function list();
    public function save();
    public function update();
    public function delete();
}