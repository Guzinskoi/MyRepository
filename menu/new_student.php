<?php

include('student.php');
include('command/student_registry.php');


$student = new Student();
$student->last_name = "Иванов";
$student->first_name = "Иван";
$student->middle_name = "Иванович";
$student->group = "Какая то группа";

StudentRegistry::getInstance()->addStudent($student);

$object = new DetailedPrintVisitor();
StudentRegistry::getInstance()->visitStudents($object);