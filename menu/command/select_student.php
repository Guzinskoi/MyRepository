<?php
require_once('command.php');
require_once('student.php');
require_once('command/student_registry.php');
require_once('brief_print_visitor.php');

class SelectStudentCommand implements Command {
    
    public function execute() {
        if(StudentRegistry::getInstance()->getStudentCount() !== ) {
            $list_students = new BriefPrintVisitor();
            StudentRegistry::getInstance()->visitStudents($list_students);

            $student = readline("Введите номер студента: ");
            EditContext::getInstance()->student = StudentRegistry::getInstance()->getStudent($number - 1);
        } else {
            
        }
        
    }
}