<?php

trait BookEngagementTrait {
    private int $likes = 0;

    public function likeBook(): void {
        $this->likes++;
        echo "Book liked! Likes: {$this->likes}.\n";
    }

    public function getLikes(): int {
        return $this->likes;
    }
}
?>