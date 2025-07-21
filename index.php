<?php 

use Antipuesto\Gs\StudentModel;

require 'vendor/autoload.php';

$student = new StudentModel;
$listofstudents = $student->read();
print_r($listofstudents);

