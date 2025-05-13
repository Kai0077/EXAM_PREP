<?php
// Create (expires in 1 hour)
setcookie("user", "John", time() + 3600);

// Read (next request)
echo $_COOKIE['user'] ?? '';

// Update
setcookie("user", "Jane", time() + 3600);

// Delete
setcookie("user", "", time() - 3600);
?>