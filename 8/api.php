<?php
header(header: 'Content-Type: application/json');
$data = ["status" => "ok", "user" => "Alice"];
echo json_encode($data);
?>

