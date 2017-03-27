<?php

namespace Source;


interface ISugest
{
    public function getId();
    public function setId($id);
    public function getPerfil();
    public function setPerfil($perfil);
    public function getNome();
    public function setNome($nome);
    public function getEndereco();
    public function setEndereco($endereco);
    public function getBairro();
    public function setBairro($bairro);
    public function getTelefone();
    public function setTelefone($telefone);
    public function getEmail();
    public function setEmail($email);
    public function getCidade();
    public function setCidade($cidade);

}