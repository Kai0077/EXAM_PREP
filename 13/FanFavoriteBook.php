<?php
require_once 'BookEngagementTrait.php';

class FanFavoriteBook {
    private string $bookTitle;
    use BookEngagementTrait;

    public function __construct(string $title) {
        $this->bookTitle = $title;
    }

    public function getTitle(): string {
        return $this->bookTitle;
    }
}

?>