<?php
include('student_visitor.php');

class DetailedPrintVisitor implements StudentVisitor {

    public function startVisit() {

    }

    public function visitStudent($number, $student) {
        echo "$number";
        $student->printLong(); 
    }

    public function finishVisit() {
        
    }

}

/*
напичатать расшириную информацию о каждом студенте,
 а если студентов нет вывести соответствующее сообщение
*/