<?php
require_once('command.php');

class Change implements Command {
    
    public function execute() {
        print("Hello world 2");
    }
}