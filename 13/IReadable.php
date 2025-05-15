<?php

interface IReadable {
    public function readPage(int $pageNumber): string;
}
?>