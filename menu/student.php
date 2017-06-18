<?php

class Student {

    public $last_name, $first_name, $middle_name, $group, $marks;

    public function printLong() {
        print("Фамилия: ".$this->last_name."\n");
        print("Имя: ".$this->first_name."\n");
        print("Отчество: ".$this->middle_name."\n");
        print("Группа: ".$this->group."\n");
        foreach($this->marks as $subject => $mark){
            echo "$subject: $mark\n";
        }
    }

    public function printShort() {
        print($this->last_name."\n");
    }

    public function printSubjects() {
        foreach($this->marks as $subject => $mark){
            echo "$subject\n";
        }
    }
}
