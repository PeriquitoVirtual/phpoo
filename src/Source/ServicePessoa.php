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


        $query1 = "SELECT *, cidade.nome as cidade from pessoa, cidade WHERE pessoa.id_cidade = cidade.id";
        $stmt = $this->db->prepare($query1);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);


    }



    public function save(){

        $query = "INSERT INTO pessoas(
                    perfil,
                    nome, 	
                    endereco, 	
                    bairro,	
                    telefone,
                    email,
                    cidade
                   )
                  VALUES
                  (
                  '".$cod."',
                  '".$nome."',
                  '".$tipo."',
                  '".$negocio."',
                  '".$bairro."',
                  '".$idade."',
                  '".$quartos."',
                  '".$suites."',
                  '".$banheiros."',
                  '".$garagem."',
                  '".$resumo."',
                  '".$descricao."',
                  '".$valor."',
                  '".$link."',
                  '".$status."'
                  )");

    }


    public function update(){

    }


    public function delete(){

    }
}