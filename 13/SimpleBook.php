<?php

require_once 'Readable.php';

class SimpleBook implements IReadable {
    private string $title;

    public function __construct(string $title) {
        $this->title = $title;
    }

    public function readPage(int $pageNumber): string {
        return "Reading page {$pageNumber} of '{$this->title}'.\n";
    }
}

?>