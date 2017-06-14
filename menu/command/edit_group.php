<?php
require_once('command.php');
require_once('student.php');
require_once('command/student_registry.php');

class EditGroupCommand implements Command {
    
    public function execute() {
        EditContext::getInstance()->student->group = readline("Введите группу студента: ");
    }
}