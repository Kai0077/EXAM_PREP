<?php
session_start();                // Start or resume the session

// Create
$_SESSION['username'] = 'John';

// Read
echo $_SESSION['username'];

// Update
$_SESSION['username'] = 'Jane';

// Delete
unset($_SESSION['username']);
?>