<?php

class StudentRegistry {

    private $student_list = array();
    private static $instance = null;

    private function __construct() {

    }

    public static function getInstance() {
        if(StudentRegistry::$instance == null) {
            StudentRegistry::$instance = new StudentRegistry();
        }
        return StudentRegistry::$instance;
    }

    public function addStudent($student) {
        $this->student_list[] = $student;
    }

    public function getStudent($number) {
        return $this->student_list[$number];
    }

    public function removeStudent($number) {
        if(is_int($number))
            unset($this->student_list[$number]);
        else {
            if(($student_key = array_search($student, $student_list)) !== false) {
                unset($student_list[$student_key]);
            }
        }
    }

    public function getStudentCount() {
        return count($this->student_list);
    }

    public function visitStudents($visitor) {
        $visitor->startVisit();
        for($i = 0; $i < count($this->student_list); $i++) {
            $visitor->visitStudent($i, $this->student_list[$i]);
        }
        $visitor->finishVisit();
    }

    public function save() {
        $students = array();
        for($i = 0; $i <= $this->getStudentCount(); $i++) {
           $s = $this->getStudent($i);
           $stud = array("last_name" => $s->last_name, "first_name" => $s->first_name, "middle_name" => $s->middle_name, "group" => $s->group, "marks"  => $s->marks);
           $students[] = $stud;
        }
        $f = fopen(config.json, "w");
        fwrite($f, json_encode($students));
        fclose($f);
    }

    private function load() {
        $f = fopen(config.json, "r");
        fread($f, json_decode($students));
        fclose($f);
        for($i = 0; $i <= $this->getStudentCount(); $i++) {
           $s = $this->getStudent($i);
           $stud = array("last_name" => $this->last_name, "first_name" => $this->first_name, "middle_name" => $this->middle_name, "group" => $this->group, "marks"  => $this->marks);
           $this->student_list[] = $stud;
        }
    }
}
