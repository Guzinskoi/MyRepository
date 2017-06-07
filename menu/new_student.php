<?php

require_once('student_visitor.php');
require_once('student.php');
require_once('command/student_registry.php');
require_once('brief_print_visitor.php');
require_once('detailed_print_visitor.php');
require_once('high_achiever_visitor.php');
require_once('low_achiever_visitor.php');


$student = new Student();
$student->last_name = "Иванов";
$student->first_name = "Иван";
$student->middle_name = "Иванович";
$student->group = "Какая то группа";
$student->marks = array("мат"=>5, "рус"=>5, "инглиш"=>5); 

StudentRegistry::getInstance()->addStudent($student);

$student = new Student();
$student->last_name = "Петров";
$student->first_name = "Петр";
$student->middle_name = "Петрович";
$student->group = "Другая группа";
$student->marks = array("мат"=>4, "рус"=>2, "инглиш"=>5);

StudentRegistry::getInstance()->addStudent($student);

/*$object_detailed = new DetailedPrintVisitor();
StudentRegistry::getInstance()->visitStudents($object_detailed);

$object_brief = new BriefPrintVisitor();
StudentRegistry::getInstance()->visitStudents($object_brief);
*/

//$object_high_ach = new HighAchieverVisitor();
//StudentRegistry::getInstance()->visitStudents($object_high_ach);

$object_low_ach = new LowAchieverVisitor();
StudentRegistry::getInstance()->visitStudents($object_low_ach);


