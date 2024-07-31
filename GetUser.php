<?php
$servername = "localhost";
$username = "root";
$password = "";
// AL- CHEQUEAR EL NOMBRE
$dbname = "unitybackend";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

// AL- REVISAR - open
$sql = "SELECT id, username, fullname FROM usertest";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - UserName: " . $row["username"]. " " . $row["fullname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

// AL- REVISAR - END
?>