<?php
require_once('command.php');
require_once('student.php');
require_once('command/student_registry.php');

class ShowSelectedCommand implements Command {
    
    public function execute() {
        EditContext::getInstance()->student->printLong();
    }
}