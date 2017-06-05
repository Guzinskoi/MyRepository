<?php

require_once('student.php');
require_once('command/student_registry.php');

class HighAchieverVisitor implements StudentVisitor {

     public $flag;

    public function startVisit() {        
            $this->flag = false; 
         }

    public function visitStudent($number, $student) {
        $this->flag = true;
        foreach($student->marks as $subject => $mark){ 
            if($this->flag = true)           
                if($mark !== 5) {
                    $this->flag = false;
                    break;
                } 
            }
      
            $number ++;
            echo "$number. ";
            $student->printShort();
                
    }

    public function finishVisit() {
        if($this->flag == false) {
            echo "Нет отличников\n";
        }            
    }
}

//студент у которого все оценки "5"