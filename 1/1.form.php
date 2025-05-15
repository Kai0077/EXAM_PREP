<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = htmlspecialchars($_POST['name'] ?? '');
  $email = htmlspecialchars($_POST['email'] ?? '');
  echo "Name: {$name}, Email: {$email}";
}

?>

<form method="POST">
  <label for="name">name</label>
  <input type="text" name="name" required>
  <label for="email">name</label>
  <input type="text" name="email" required>
  <button type="submit">Submit</button>
</form>