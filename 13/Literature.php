<?php

abstract class Literature {
    protected string $mainTitle;

    public function __construct(string $title) {
        $this->mainTitle = $title;
    }

    public function getOverallTitle(): string {
        return $this->mainTitle;
    }

    abstract public function describeLiteraryForm(): string;
}

?>