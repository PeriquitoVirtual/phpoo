<?php


namespace Source;


class ServicePessoa implements IServicePessoa
{

    private $db;
    private $pessoa;

    public function __construct(IConn $db, IPessoa $pessoa){

        $this->db = $db->connect();
        $this->pessoa = $pessoa;
    }

    public function list(){


        $query = "SELECT *, cidade.nome as cidade from pessoa, cidade WHERE pessoa.id_cidade = cidade.id";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);


    }



    public function save(){

        $query = "Insert into 'pessoa' ('perfil', 'nome','endereco','bairro','telefone','email','id_cidade')
                  VALUES (:perfil,:nome,:endereco,:bairro,:telefone,:email,:id_cidade)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":perfil", $this->pessoa->getPerfil());
        $stmt->bindValue(":nome", $this->pessoa->getNome());
        $stmt->bindValue(":endereco", $this->pessoa->getEndereco());
        $stmt->bindValue(":bairro", $this->pessoa->getBairro());
        $stmt->bindValue(":telefone", $this->pessoa->getTelefone());
        $stmt->bindValue(":email", $this->pessoa->getEmail());
        $stmt->bindValue(":id_cidade", $this->pessoa->getCidade());
        $stmt->execute();
        return $this->db->lastInsertId();

    }


    public function update(){

    }


    public function delete(){

    }
}