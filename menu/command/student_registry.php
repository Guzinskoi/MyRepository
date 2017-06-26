<?php

require_once('student.php');
require_once('command.php');

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
        for($i = 0; $i < $this->getStudentCount(); $i++) {
           $s = $this->getStudent($i);
           $stud = array("last_name" => $s->last_name, "first_name" => $s->first_name, "middle_name" => $s->middle_name, "group" => $s->group, "marks"  => $s->marks);
           $students[] = $stud;
        }
        $f = fopen("config.json", "w");
        fwrite($f, json_encode($students));
        fclose($f);
    }

    public function load() {
        
        $f = fopen("config.json", "r");
        $students =  fread($f, filesize("config.json"));
        $students = json_decode($students);
        fclose($f);
        foreach($students as $value) {
            $student = new Student();
            $student->last_name = $value->last_name;
            $student->first_name = $value->first_name;
            $student->middle_name = $value->middle_name;
            $student->group = $value->group;
            $student->marks = array();
            foreach($value->marks as $subject => $mark){
                $student->marks[$subject] = $mark;
            }

            $this->addStudent($student);
        }
    }
}