<?php


namespace Source;


class ServiceSugest implements IServiceSugest
{

    private $db;
    private $sugest;

    public function __construct(IConn $db, ISugest $sugest){

        $this->db = $db->connect();
        $this->sugest = $sugest;
    }

    public function list(){
        if (isset($_REQUEST['query'])) {
        $query = $_REQUEST['query'];
        }
        else $query = "";

        $query1 = "SELECT * from pessoa WHERE nome LIKE '%{$query}%'";
        $stmt = $this->db->prepare($query1);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);


    }



    public function save(){



    }


    public function update(){

    }


    public function delete(){

    }
}