<?php
require_once('command.php');
require_once('student.php');
require_once('command/student_registry.php');
require_once('edit_context.php');

class ShowSelectedCommand implements Command {

    public function execute() {
      if(StudentRegistry::getInstance()->getStudentCount() !== 0) {
        EditContext::getInstance()->student->printLong();
      }
    }
}
