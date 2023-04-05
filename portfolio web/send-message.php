<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "owusukenneth77@gmail.com";
  $subject = "New message from $name";
  $body = "Name: $name\nEmail: $email\nMessage: $message";

  // Send email
  mail($to, $subject, $body);

  // Redirect to thank you page
  header("Location: thank-you.html");
  exit;
}
?>
