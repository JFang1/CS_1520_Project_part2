<?php
  $db = new mysqli('localhost', 'root', '', 'my_website_form');
  if ($db->connect_error) {
    die ("Could not connect to db " . $db->connect_error);
  }
  else {
    echo "<p>Connect success!</p>";
  }
  $name = $_REQUEST['contact-name'];
  $email = $_REQUEST['email-address'];
  $subject = $_REQUEST['message-subject'];
  $message = $_REQUEST['message-area'];
  $result = $db->query("INSERT INTO messages (sender, email address, subject, message) VALUES ($name, $email, $subject, $message)");
  if ($result === TRUE) {
    echo "<p>DB submission success!</p>";
  }
  else {
    echo "<p>Error: " . $result . "</p>";
  }
?>
