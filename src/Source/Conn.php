<?php

namespace Source;

class Conn implements IConn {

    private $dsn;
    private $user;
    private $pass;

    public function __construct($dsn,$user,$pass) {

        $this->dsn = $dsn;
        $this->user = $user;
        $this->pass = $pass;
    }

    public function connect()
    {
        $pdo= new \PDO($this->dsn,$this->user,$this->pass);
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return $pdo;

    }

}
