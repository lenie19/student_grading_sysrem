<?php
namespace Antipuesto\Gs\Models;

use Antipuesto\Gs\Core\Crud;
use Antipuesto\Gs\Core\Database;

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
    public function create(){
        //create data
        $query = $this->conn->prepare("INSERT INTO `students`(`ID`, `Name`, `Course`, `year_level`, `section`) 
        VALUES ('$this->id','$this->name','$this->course','$this->year_level','$this->section')");
        if ($query->execute()){
            echo"STUDENT inserted";
        }
    }
    public function read() {
        try {
            //code
            $sql = "SELECT * FROM students";
            $results = $this->conn->query($sql);
            return $results->fetch_all(MYSQLI_ASSOC);
        } catch (\Throwable $th) {
            //throw $th;
            echo $th->getMessage();
        }

    }
    public function update($id) {
        $this->id=$id;
        $sql = "UPDATE students SET Name = '$this->name', course = '$this->course',
        year_level = $this->year_level, section = '$this->section' WHERE id = $this->id";

    if ($this->conn->query($sql)) {
        echo "Student updated";
    } else {
        echo "Update failed: ". $this->conn->error;
    }

    }
    public function delete($id) {
        $this->id=$id;
        $sql = "DELETE FROM `students` WHERE ID = $this->id";
        if ($this->conn->query($sql)) {
            echo "Student Deleted Successfuly!";
        } else {
            echo "Delete Student failed!". $this->conn->error;
        }
    }

   


    
}