<?php
require_once('command.php');
require_once('student.php');
require_once('command/student_registry.php');

class EditMarkCommand implements Command {

    public function execute() {
        EditContext::getInstance()->student->printSubjects();

        $subject = readline("Введите название предмета: ");
        while(!array_key_exists($subject, EditContext::getInstance()->student->marks)) {
          $subject = readline("Введите название предмета: ");
        }
          EditContext::getInstance()->student->marks[$subject] = readline("Введите оценку: ");
          StudentRegistry::getInstance()->save();
    }
}
