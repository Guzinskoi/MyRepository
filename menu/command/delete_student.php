<?php
require_once('command.php');
require_once('student.php');
require_once('command/student_registry.php');

class DeleteStudentCommand implements Command {
    
    public function execute() {
        $list_students = new BriefPrintVisitor();
        StudentRegistry::getInstance()->visitStudents($list_students);

        $num_student = readline("Введите номер студента: ");
        StudentRegistry::getInstance()->visitStudents($num_student - 1);
    }
}