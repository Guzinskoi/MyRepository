<?php

class DetailedPrintVisitor extends StudentVisitor {

    public function startVisit() {
        $this->visitor = $visitor;
    }

    public function visitStudent($number, $student) {

        
        echo "$number. {$student->last_name}";


    }

    public function finishVisit() {
        
    }

}

/*
напичатать расшириную информацию о каждом студенте,
 а если студентов нет вывести соответствующее сообщение
*/