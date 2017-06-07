<?php

require_once('student.php');
require_once('command/student_registry.php');

class LowAchieverVisitor implements StudentVisitor {

    public $flag;

    public function startVisit() {        
            $this->flag = false; 
         }

    public function visitStudent($number, $student) {
        $flag = true;
        foreach($student->marks as $subject => $mark){            
            if($mark !== 2) {
                $flag = false;
                break;
            } 
        }
        if($flag) {
            $this->flag = true;
            $number ++;
            echo "$number. ";
            $student->printShort();
        }               
    }

    public function finishVisit() {
        if($this->flag == false) {
            echo "Нет должников\n";
        }            
    }
}
//студент у которого хотя бы одна оценка ниже "3"