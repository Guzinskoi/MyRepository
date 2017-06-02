<?php

interface StudentVisitor {

    public function startVisit();
    public function visitStudent($number, $student);
    public function finishVisit();
}