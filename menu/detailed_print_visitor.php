<?php

class DetailedPrintVisitor extends StudentVisitor {

    public function startVisit() {
        
    }

    public function visitStudent($number, $student) {
        echo "$number. {$student->last_name}";
    }

    public function finishVisit() {
        
    }

}