<?php

abstract class MenuItem {
    
    private $number;
    private $title;

    public function __construct($number, $title) {
        $this->number = $number;
        $this->title = $title;
    }

    public function getNumber() {
        return $this->number;
    }

    public function getTitle() {
        return $this->title;
    }

    public function print() {
        echo $this->number.". ";
        echo $this->title."<br/>";
    }

    public abstract function execute();
}