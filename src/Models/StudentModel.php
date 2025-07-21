<?php

namespace Antipuesto\Gs\Models;

use Antipuesto\Gs\Core\Crud;

class StudentModel extends Database implements Crud {

    public int $id;
    public string $name;
    public string $course;
    public int $year_level;
    public string $section;
     
    public function __construct()
    {
        parent::__construct();
        $this->id = 0;
        $this->name ="";
        $this->course="";
        $this->year_level= 0 ;
        $this->section = "";

    }
    public function find($id){

    }
    public function create(){

    }
    public function read(){  
        try {
            $sql = "SELECT * FROM students";
            $result = $this->conn->query($sql)
            return $result->fetch_all(MYSQLI_ASSOC);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    public function update($id){

    }
    public function delete($id){
        
    }
}