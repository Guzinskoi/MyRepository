<?php

require_once('student_visitor.php');
require_once('student.php');
require_once('command/student_registry.php');

class BriefPrintVisitor implements StudentVisitor {

        public $flag;

    public function startVisit() {
            $this->flag = false;
         }

    public function visitStudent($number, $student) {
        $this->flag = true;
        $number ++;
        echo "$number. ";
        $student->printShort();
    }

    public function finishVisit() {
        if(!$this->flag) {
            echo "Нет студентов\n";
        }
    }
}

// здесь краткую информацию выводить
