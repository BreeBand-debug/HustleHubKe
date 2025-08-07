<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "your-email@example.com";  // Change to your actual email
  $subject = "New Contact Message";
  $message = "Name: " . $_POST["name"] . "\n" .
             "Email: " . $_POST["email"] . "\n\n" .
             "Message:\n" . $_POST["message"];
  $headers = "From: no-reply@hustlehub.co.ke";

  mail($to, $subject, $message, $headers);
  echo "<h2>Message sent successfully!</h2>";
}
?>
