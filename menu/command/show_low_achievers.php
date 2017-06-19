<?php
require_once('command.php');
require_once('student.php');
require_once('command/student_registry.php');
require_once('low_achiever_visitor.php');

class ShowLowAchieversCommand implements Command {
    
    public function execute() {
        $low_achievers = new LowAchieverVisitor();
        StudentRegistry::getInstance()->visitStudents($low_achievers);
    }
}