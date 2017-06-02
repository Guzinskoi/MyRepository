<?php

include('simple_menu_item.php');

class Menu extends MenuItem {

    private $items = array();

    public function __construct($number = 0, $title = "") {
        parent:: __construct($number, $title);
    }

    public function addItem($title, $command) {
        $menuItem = new SimpleMenuItem(count($this->items), $title, $command);
        $this->items[] = $menuItem;
    }

    public function addSubmenu($title) {
        $menu = new Menu(count($this->items),$title);
        $this->items[] = $menu;
        return $menu;
    }

    private function printMenu() {
        print("\n");
        foreach($this->items as $item) {
            $item->print();
        }
        print((count($this->items) + 1) . ". Exit\n");
    }

    private function select() {
        $number = readline("Введите номер пункта: ");
        while ($number <= 0 || ($number  > (count($this->items) + 1))){
            $number = readline("Введите номер пункта: ");
        }            
        if( $number == (count($this->items) + 1)) {
            return false;
        } else {
            $this->items[$number - 1]->execute();
            return true;
        }            
    }

    public function execute(){
        do {
            $this->printMenu();
        } while ($this->select());
    }           
}
include('command/add.php');

$test = new Menu();
$test->addItem("Привет мир", new Add());
$test->addItem("Привет мир 2", new Change());
$test->execute();