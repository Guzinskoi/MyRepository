<?php
require_once('command.php');
require_once('student.php');
require_once('command/student_registry.php');
require_once('high_achiever_visitor.php');

class ShowHighAchieversCommand implements Command {
    
    public function execute() {
        $high_achievers = new HighAchieverVisitor();
        StudentRegistry::getInstance()->visitStudents($high_achievers);
    }
}