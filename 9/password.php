<?php
$password = "secret123";

// Hash the password
$hash = password_hash($password, PASSWORD_DEFAULT);

// Verify later
if (password_verify("secret123", $hash)) {
    echo "Password is valid!";
}
?>