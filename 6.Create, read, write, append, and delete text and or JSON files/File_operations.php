<?php
file_put_contents("file.txt", "Hello");                // Write
echo file_get_contents("file.txt");                    // Read
file_put_contents("file.txt", "\nWorld", FILE_APPEND); // Append
unlink("file.txt");                                    // Delete

$data = ['name'=>'John'];
file_put_contents("data.json", json_encode($data));    // Write JSON
$read = json_decode(file_get_contents("data.json"), true);
echo $read['name'];                                    // Read JSON
?>