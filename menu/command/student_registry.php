<?php

include('detailed_print_visitor.php');

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

    }
    
    private function load() {

    }
}