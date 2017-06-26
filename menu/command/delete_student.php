<?php
require_once('command.php');
require_once('student.php');
require_once('command/student_registry.php');

class DeleteStudentCommand implements Command {

    public function execute() {
        $list_students = new BriefPrintVisitor();
        StudentRegistry::getInstance()->visitStudents($list_students);

        $number = readline("Введите номер студента: ");
        StudentRegistry::getInstance()->removeStudent($number - 1);
        StudentRegistry::getInstance()->save();
    }
}
