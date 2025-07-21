<?php

namespace Antipuesto\Gs\Core

class Database {
    protected function __construct()
    {
        $host = 'localhost' ;
        $db = 'oop' ;
        $user = 'root' ;
        $pass = '';
        //mysqli connection
        $this-> conn = new \mysqli($hist, $user, $pass, $db);
        if ($this-> conn ->connect_error) {
            die ("connection failed: ", $this->conn->connection_error);
        }
    }
}