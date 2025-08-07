<?php
$host = 'localhost';
$db = 'hustlehub';
$user = 'root';
$pass = '';
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

$result = $conn->query("SELECT * FROM hustlers");
echo "<h2>Registered Hustlers</h2>";
while ($row = $result->fetch_assoc()) {
  echo "<div style='margin:1rem;padding:1rem;border:1px solid #ccc'>";
  echo "<strong>Name:</strong> " . $row['name'] . "<br>";
  echo "<strong>Skills:</strong> " . $row['skills'] . "<br>";
  echo "<strong>Location:</strong> " . $row['location'] . "<br>";
  echo "<strong>Contact:</strong> " . $row['contact'] . "<br>";
  echo "</div>";
}
$conn->close();
?>
