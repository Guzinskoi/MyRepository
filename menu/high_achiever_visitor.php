<?php

require_once('student.php');
require_once('command/student_registry.php');

class HighAchieverVisitor implements StudentVisitor {

    public $flag;

    public function startVisit() {        
            $this->flag = false; 
         }

    public function visitStudent($number, $student) {
        $flag = true;
        foreach($student->marks as $subject => $mark){            
            if($mark != 5) {
                $flag = false;
                break;
            } 
        }
        if($flag) {
            $this->flag = true;
            $number ++;
            echo "$number";
            $student->printShort();
        }               
    }

    public function finishVisit() {
        if(!$this->flag) {
            echo "Нет отличников\n";
        }            
    }
}

//студент у которого все оценки "5"