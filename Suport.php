<?php
$conn = mysqli_connect("http://localhost/phpmyadmin/", "root", "", "atestat");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, Name , Email , radio ,Obiectiuni";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"] . "</td><td>"
. $row["Email"]. "</td></tr>";. $row["radio"]. "</td></tr>";. $row["Obiectiuni"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
