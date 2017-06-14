<?php
require_once('command.php');
require_once('student.php');
require_once('command/student_registry.php');

class DeleteMarkCommand implements Command {
    
    public function execute() {
        EditContext::getInstance()->student->printSubjects();

        $subject = readline("Введите название предмета: ");
        if(array_key_exists($subject, EditContext::getInstance()->student->marks))
            unset(EditContext::getInstance()->student->marks[$subject]);
    }
}