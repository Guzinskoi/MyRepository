<?php
require_once('command.php');
require_once('student.php');
require_once('command/student_registry.php');

class AddMarkCommand implements Command {
    
    public function execute() {
        EditContext::getInstance()->student->printSubjects();

        $subject = readline("Введите название предмета: ");
        while(true){
            if(!array_key_exists($subject, EditContext::getInstance()->student->marks)) {
                EditContext::getInstance()->student->marks[$subject] = readline("Введите оценку: ");
                break;
            } else {
                echo "Неправильное название предмета";
            }                
        }
        StudentRegistry::getInstance()->save();
    }
}