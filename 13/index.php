<?php

require_once 'SimpleBook.php';
require_once 'Novel.php';
require_once 'FanFavoriteBook.php';

echo "--- Interface (Readable) Example ---\n";
$simpleBook = new SimpleBook("Interface Demo");
echo $simpleBook->readPage(1);

echo "\n--- Abstract Class (Literature) Example ---\n";

$myNovel = new Novel("Abstract Class Demo Novel");
echo $myNovel->describeLiteraryForm();
echo " (" . $myNovel->getOverallTitle() . ")\n";

echo "\n--- Trait (BookEngagementTrait) Example ---\n";
$fanBook = new FanFavoriteBook("Trait Demo Book");
$fanBook->likeBook();
$fanBook->likeBook();
echo "Likes: " . $fanBook->getLikes() . "\n";

?>