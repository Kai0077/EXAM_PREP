<?php
require_once 'Literature.php';

class Novel extends Literature {

    public function describeLiteraryForm(): string {
        return "This is a work of fiction.";
    }
}

?>