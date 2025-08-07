<?php
$host = 'localhost';
$db = 'hustlehub';
$user = 'root';
$pass = '';
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

$name = $_POST['name'];
$skills = $_POST['skills'];
$location = $_POST['location'];
$contact = $_POST['contact'];

$sql = "INSERT INTO hustlers (name, skills, location, contact) VALUES ('$name', '$skills', '$location', '$contact')";
if ($conn->query($sql) === TRUE) {
  echo "<h2>Profile submitted successfully!</h2>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
