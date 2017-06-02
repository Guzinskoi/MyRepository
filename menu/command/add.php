<?php
include('command.php');
include('command/change.php');

class Add implements Command {
    
    public function execute() {
        print("Hello world 1");
    }
}