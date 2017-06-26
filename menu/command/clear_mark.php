<?php
require_once('command.php');
require_once('student.php');
require_once('command/student_registry.php');

class ClearMarkCommand implements Command {
    
    public function execute() {
        EditContext::getInstance()->student->printSubjects();
        
        $clear = readline("Вы уверены что хотите отчистить список оценок? Y/n:");
        if($clear == "Y" || $clear == "y") {
            EditContext::getInstance()->student->marks = array();
            StudentRegistry::getInstance()->save();
       }                  
    }
}