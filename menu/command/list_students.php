<?php
require_once('command.php');
require_once('student_visitor.php');
require_once('student.php');
require_once('command/student_registry.php');

class ListStudentsCommand implements Command {

    public function execute() {
        $list_students = new DetailedPrintVisitor();
        StudentRegistry::getInstance()->visitStudents($list_students);
    }
}
