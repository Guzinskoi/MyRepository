<?php
require_once('command.php');
require_once('student.php');
require_once('command/student_registry.php');

class DeselectStudentCommand implements Command {
    
    public function execute() {
        EditContext::getInstance()->student = null;
    }
}