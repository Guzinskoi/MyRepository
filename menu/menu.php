<?php

include('menu_item.php');

class Menu extends MenuItem {

    private $items = array();

    public function __construct($number, $title) {
        parent:: __construct($number, $title);
    }

    public function addItem($title, $command) {
        $MenuItem = new SimpleMenuItem(count($this->item), $title, $command);
        $this->items[] = $MenuItem;
    }

    public function addSubmenu($title) {
        $menu = new Menu(count($this->items),$title);
        $this->items[] = $menu;
        return $menu;
    }

    private function printMenu() {
        foreach($this->items as $item) {
            $item->print();
        }
    }

    private function select() {
        if($_GET['number'] == count($this->items)) {
            return false;
        }
            return true;
    }

    public function execute(){
        $this->printMenu();
        $this->select();
    }           
}