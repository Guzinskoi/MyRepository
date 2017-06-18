<?php
require_once('command.php');
require_once('student.php');
require_once('command/student_registry.php');

class AddStudentCommand implements Command {

    public function execute() {
        $student = new Student();
        $student->last_name = readline("Введите фамилию: ");
        $student->first_name = readline("Введите имя: ");
        $student->middle_name = readline("Введите отчество: ");
        $student->group = readline("Введите группу: ");
        $student->marks = array();

        StudentRegistry::getInstance()->addStudent($student);
    }
}
