<?php
require_once('command.php');
require_once('student.php');
require_once('command/student_registry.php');

class EditMiddleNameCommand implements Command {
    
    public function execute() {
        EditContext::getInstance()->student->middle_name = readline("Введите отчество студента: ");
        StudentRegistry::getInstance()->save();
    }
}