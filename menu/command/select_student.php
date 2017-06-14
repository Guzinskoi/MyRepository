<?php
require_once('command.php');
require_once('student.php');
require_once('command/student_registry.php');

class SelectStudentCommand implements Command {
    
    public function execute() {
        $list_students = new BriefPrintVisitor();
        StudentRegistry::getInstance()->visitStudents($list_students);

        $student = readline("Введите номер студента: ");
        EditContext::getInstance()->student = StudentRegistry::getInstance()->getStudent($number - 1);
    }
}