<?php 

use Antipuesto\Gs\Models\StudentModel;

require 'vendor/autoload.php';

$Student = new StudentModel;
//$Student-> id = 1234;
//$Student-> name = "LEN";
//$Student-> course = "BPEED";
//$Student-> year_level = 1;
//$Student-> section = "d";

//$Student->create();

$listofstudents = $Student->read();
print_r($listofstudents);

