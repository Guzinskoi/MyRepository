<?php

class Student {

    public $last_name, $first_name, $middle_name, $group, $marks;

    public function printLong() {
        print("Фамилия: ".$last_name);
        print("Имя: ".$first_name);
        print("Отчество: ".$middle_name);
        print("Группа: ".$group);        
    }

    public function printShort() {
        print($last_name." ".$first_name." ".$middle_name." ".$group);
    }

    public function printSubjects() {
        foreach($this->marks as $subject => $mark){
            echo "$subject\n";
        }
    }
}