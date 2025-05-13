<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = htmlspecialchars($_POST['name'] ?? '');
  $email = htmlspecialchars($_POST['email'] ?? '');
  echo("Hey $name your email is $email.");
}

?>

<form method="POST">
  Name: <input type="text" name="name">
  Email: <input type="email" name="email">
  <button type="submit">Submit</button>

</form>