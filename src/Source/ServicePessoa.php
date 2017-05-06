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


        $query = "SELECT *, cidade.nome as cidade, pessoa.id as cod, pessoa.nome as pessoa from pessoa, cidade WHERE pessoa.id_cidade = cidade.id";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $stmt->rowCount();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);


    }

    public function sugest(){

       $busca = $_POST['query'];

        $query1 = "SELECT * from pessoa WHERE nome LIKE '%$busca%'";
        $stmt = $this->db->prepare($query1);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);


    }




    public function save(){



        $query = "INSERT into pessoa (perfil, nome,endereco,cep,telefone,email,id_cidade)
                  VALUES (:perfil,:nome,:endereco,:cep,:telefone,:email,:id_cidade)";




        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":perfil", $this->pessoa->getPerfil());
        $stmt->bindValue(":nome", $this->pessoa->getNome());
        $stmt->bindValue(":endereco", $this->pessoa->getEndereco());
        $stmt->bindValue(":cep", $this->pessoa->getCEP());
        $stmt->bindValue(":telefone", $this->pessoa->getTelefone());
        $stmt->bindValue(":email", $this->pessoa->getEmail());
        $stmt->bindValue(":id_cidade", $this->pessoa->getCidade());
        $stmt->execute();

        return $this->db->lastInsertId();


    }


    /**
     *
     */
    public function update(){

    }


    public function delete(){

    }
}